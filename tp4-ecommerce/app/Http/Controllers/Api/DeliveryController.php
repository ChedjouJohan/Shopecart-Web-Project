<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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
}