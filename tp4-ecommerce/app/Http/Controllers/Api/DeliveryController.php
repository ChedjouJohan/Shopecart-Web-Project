<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\OrderResource;

/**
 * @OA\Tag(
 * name="Deliveries",
 * description="API Endpoints for Delivery Management and Logistics"
 * )
 */
class DeliveryController extends Controller
{
    // Constantes de statut de livraison
    private const DELIVERY_STATUSES = ['ASSIGNED', 'EN_ROUTE', 'DELIVERED', 'FAILED', 'PENDING_PAYMENT', 'READY_TO_SHIP'];
    
    /**
     * @OA\Get(
     * path="/api/deliveries/pending",
     * summary="Get orders ready to be assigned to a delivery person",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(
     * response=200,
     * description="List of pending orders",
     * @OA\JsonContent(
     * @OA\Property(property="message", type="string", example="Pending orders retrieved successfully"),
     * @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Order"))
     * )
     * ),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function getPendingDeliveries()
    {
        // Restriction : Seuls les rôles gérant la logistique (Admin, Manager, Supervisor)
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json(['message' => 'Access denied.'], 403);
        }

        // Filtre : Commandes payées et non encore assignées à un livreur
        // NOTE: Ajustez la logique de 'status' si votre modèle Order utilise des statuts différents.
        $pendingOrders = Order::whereNull('delivery_user_id')
                              ->whereIn('status', ['PAID', 'READY_TO_SHIP'])
                              ->orderBy('created_at', 'asc')
                              ->get();

        return response()->json([
            'message' => 'Pending orders retrieved successfully',
            'data' => $pendingOrders
        ]);
    }

    /**
     * @OA\Post(
     * path="/api/deliveries/{order}/assign",
     * summary="Assign an order to a delivery person",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="order",
     * in="path",
     * required=true,
     * description="Order ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"delivery_user_id"},
     * @OA\Property(property="delivery_user_id", type="integer", description="ID of the delivery user")
     * )
     * ),
     * @OA\Response(response=200, description="Order assigned successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="Order or Delivery user not found")
     * )
     */
    public function assignDelivery(Request $request, Order $order)
    {
        // Restriction : Seuls les rôles gérant la logistique
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json(['message' => 'Access denied.'], 403);
        }

        $validated = $request->validate([
            'delivery_user_id' => [
                'required',
                'exists:users,id',
                // Vérifie que l'utilisateur assigné a bien le rôle DELIVERY
                Rule::exists('users', 'id')->where(function ($query) {
                    return $query->where('role', User::ROLE_DELIVERY);
                }),
            ],
        ]);

        $deliveryUser = User::find($validated['delivery_user_id']);

        if (!$deliveryUser || !$deliveryUser->isDelivery()) {
            return response()->json(['message' => 'Invalid delivery user ID or role.'], 404);
        }
        
        // Mise à jour de la commande
        $order->update([
            'delivery_user_id' => $deliveryUser->id,
            'status' => 'ASSIGNED', // Mise à jour du statut pour refléter l'assignation
        ]);

        // TODO: Implémenter la notification push vers l'application React Native ici (voir exigences 104)

        return response()->json([
            'message' => "Order {$order->id} assigned to delivery user {$deliveryUser->name} successfully",
            'data' => $order
        ]);
    }

    // =======================================================
    // Méthodes pour l'Application Mobile (Livreur) - React Native
    // =======================================================

    /**
     * @OA\Get(
     * path="/api/deliveries/my",
     * summary="Get deliveries assigned to the authenticated user",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(response=200, description="List of deliveries"),
     * @OA\Response(response=403, description="Forbidden")
     * )
     */
    public function getMyDeliveries()
    {
        $user = auth()->user();

        // Restriction : Seul le rôle DELIVERY
        if (!$user->isDelivery()) {
            return response()->json(['message' => 'Access denied. Delivery role required.'], 403);
        }

        if (!$user) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        
        // 2. Vérifier si l'utilisateur est le bon rôle
        if (!$user->isDelivery()) {
            return response()->json(['message' => 'Access denied. Delivery role required.'], 403);
        }
        // Récupère les commandes qui sont assignées à ce livreur ET qui ne sont pas encore TERMINÉES
        $myDeliveries = Order::where('delivery_user_id', $user->id)
                             ->whereNotIn('status', ['DELIVERED', 'FAILED']) // Exclure les commandes terminées
                             ->orderBy('created_at', 'asc')
                             ->get();

        return response()->json([
            'message' => 'Assigned deliveries retrieved successfully',
            'data' => $myDeliveries
        ]);
    }

    /**
     * @OA\Put(
     * path="/api/deliveries/{order}/status",
     * summary="Update the delivery status of an order",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="order",
     * in="path",
     * required=true,
     * description="Order ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"status"},
     * @OA\Property(property="status", type="string", enum={"EN_ROUTE", "DELIVERED", "FAILED"}, example="EN_ROUTE")
     * )
     * ),
     * @OA\Response(response=200, description="Status updated successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="Order not found")
     * )
     */
    public function updateStatus(Request $request, Order $order)
    {
        $user = auth()->user();

        // Restriction : Seul le livreur assigné peut changer le statut
        if (!$user->isDelivery() || $order->delivery_user_id !== $user->id) {
            return response()->json(['message' => 'Access denied. Not the assigned delivery person.'], 403);
        }

        $validated = $request->validate([
            'status' => ['required', Rule::in(['EN_ROUTE', 'DELIVERED', 'FAILED'])],
        ]);

        // Mise à jour du statut
        $order->update(['status' => $validated['status']]);

        // TODO: Implémenter WebSockets (pour Angular) ici : Notifier que le statut a changé

        return response()->json([
            'message' => "Delivery status updated to {$validated['status']} for order {$order->id}",
            'data' => $order
        ]);
    }


    /**
     * @OA\Post(
     * path="/api/deliveries/location",
     * summary="Update the authenticated delivery person's current GPS location",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"latitude", "longitude"},
     * @OA\Property(property="latitude", type="number", format="float", example=48.8584),
     * @OA\Property(property="longitude", type="number", format="float", example=2.2945)
     * )
     * ),
     * @OA\Response(response=200, description="Location updated successfully"),
     * @OA\Response(response=403, description="Forbidden - Delivery role required")
     * )
     */
    public function updateLocation(Request $request)
    {
        $user = auth()->user();

        // Restriction : Seul le rôle DELIVERY
        if (!$user->isDelivery()) {
            return response()->json(['message' => 'Access denied. Delivery role required.'], 403);
        }

        $validated = $request->validate([
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
        ]);
        
        // Utilise l'upsert pour créer/mettre à jour la dernière position de l'utilisateur
        // Si l'utilisateur existe déjà, la ligne est mise à jour. Sinon, elle est créée.
        $location = $user->geolocation()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'latitude' => $validated['latitude'],
                'longitude' => $validated['longitude'],
            ]
        );

        // TODO: Implémenter WebSockets/Pusher ici pour notifier l'app Angular en temps réel !

        return response()->json([
            'message' => 'Location updated successfully',
            'data' => $location
        ]);
    }

    /**
     * @OA\Get(
     * path="/api/deliveries/live/map",
     * summary="Get all active delivery persons' live locations for the admin map",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(response=200, description="List of live locations"),
     * @OA\Response(response=403, description="Forbidden - Admin/Manager role required")
     * )
     */
    public function getLiveLocations()
    {
        // Restriction : Seuls les rôles gérant la logistique (Admin, Manager, Supervisor)
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json(['message' => 'Access denied.'], 403);
        }

        // Récupère toutes les dernières géolocalisations des utilisateurs qui sont livreurs
        $liveLocations = \App\Models\DeliveryGeolocation::with('user')
            ->whereHas('user', function ($query) {
                $query->where('role', User::ROLE_DELIVERY);
            })
            ->get();

        return response()->json([
            'message' => 'Live locations retrieved successfully',
            'data' => $liveLocations
        ]);
    }


    /**
     * @OA\Post(
     * path="/api/deliveries/{order}/proof",
     * summary="Uploads the proof of delivery (image/signature/QR) for an order",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="order",
     * in="path",
     * required=true,
     * description="Order ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\MediaType(
     * mediaType="multipart/form-data",
     * @OA\Schema(
     * @OA\Property(property="proof_image", type="string", format="binary", description="Image file (photo, signature, or QR)"),
     * @OA\Property(property="proof_type", type="string", enum={"photo", "signature", "qr"}, example="photo")
     * )
     * )
     * ),
     * @OA\Response(response=200, description="Proof uploaded successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=422, description="Validation error")
     * )
     */
    public function uploadProof(Request $request, Order $order)
    {
        $user = auth()->user();

        /// 1. Vérification d'accès : Seul le livreur assigné peut uploader la preuve
        if (!$user || !$user->isDelivery() || $order->delivery_user_id !== $user->id) {
            return response()->json(['message' => 'Access denied. Not the assigned delivery person.'], 403);
        }
        
        // 2. Vérification du statut : On n'upload pas une preuve si c'est déjà livré
        if ($order->status === 'DELIVERED') {
             return response()->json(['message' => 'Order is already marked as delivered.'], 400);
        }

        $validated = $request->validate([
            'proof_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB max
            'proof_type' => ['required', Rule::in(['photo', 'signature', 'qr'])],
        ]);

        if ($request->hasFile('proof_image')) {
            // Stocke l'image dans le dossier 'proofs' du disque 'public'
            $path = $request->file('proof_image')->store('proofs', 'public');
            
            // 3. Mise à jour de la commande
            $order->update([
                'proof_path' => $path,
                'proof_type' => $validated['proof_type'],
                // Changement automatique de statut après la preuve
                'status' => 'DELIVERED', 
            ]);
            
            // TODO: Émettre un événement WebSocket pour informer Angular que la commande est livrée.

            return response()->json([
                'message' => 'Proof of delivery uploaded successfully.',
                'data' => $order
            ]);
        }
        
        return response()->json(['message' => 'Image upload failed.'], 500);
    }
/**
     * @OA\Get(
     * path="/api/deliveries/{order}/proof",
     * summary="Get the delivery proof path (Admin/Manager/Supervisor/Client)",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="order",
     * in="path",
     * required=true,
     * description="Order ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(response=200, description="Proof URL retrieved successfully"),
     * @OA\Response(response=403, description="Forbidden"),
     * @OA\Response(response=404, description="Proof not found")
     * )
     */
    public function getProof(Order $order)
    {
        $user = auth()->user();

        // Restriction d'accès :
        // 1. Admin/Manager/Supervisor peuvent toujours voir
        // 2. Le Client de la commande peut voir
        // 3. Le Livreur assigné peut voir
        $hasAccess = $user->isAdmin() || $user->isManager() || $user->isSupervisor()
                   || $order->user_id === $user->id // Client
                   || $order->delivery_user_id === $user->id; // Livreur

        if (!$hasAccess) {
            return response()->json(['message' => 'Access denied. You are not authorized to view this proof.'], 403);
        }

        if (!$order->proof_path) {
            return response()->json(['message' => 'Delivery proof not yet available for this order.'], 404);
        }

        // Retourne le chemin complet pour accéder à l'image via le lien symbolique
        $proofUrl = Storage::url($order->proof_path);

        return response()->json([
            'message' => 'Delivery proof path retrieved successfully.',
            'data' => [
                'proof_url' => asset($proofUrl),
                'proof_type' => $order->proof_type,
            ]
        ]);
    }

    /**
     * @OA\Get(
     * path="/api/deliveries/history",
     * summary="Affiche l'historique des livraisons terminées (Livré, Échec) pour le livreur connecté.",
     * tags={"Deliveries"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(
     * response=200,
     * description="Liste des commandes terminées.",
     * @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/OrderResource"))
     * ),
     * @OA\Response(response=401, description="Non authentifié."),
     * @OA\Response(response=403, description="Accès refusé (non-livreur).")
     * )
     */
    public function getDeliveryHistory(Request $request)
    {
        $user = $request->user();

        // Sécurité : S'assurer que seul un livreur peut accéder à cette route
        if ($user->role !== 'DELIVERY') {
            return response()->json(['message' => 'Forbidden. Only delivery personnel can access this resource.'], 403);
        }

        // 1. Définir les statuts considérés comme terminés
        $finalStatuses = [
            Order::STATUS_DELIVERED, 
            Order::STATUS_FAILED,    
        ];

        // 2. Récupérer l'historique
        $history = Order::where('delivery_user_id', $user->id)
                        ->whereIn('status', $finalStatuses)
                        ->orderByDesc('updated_at')
                        ->paginate(15); // Pagination recommandée pour les listes

        // 3. Retourner la collection via la ressource
        return OrderResource::collection($history);
    }
}