<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

/**
 * @OA\Tag(
 * name="Users",
 * description="API Endpoints for User Management"
 * )
 */
class UserController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/users",
     * summary="Get all users",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="role",
     * in="query",
     * description="Filter by role",
     * required=false,
     * @OA\Schema(type="string", enum={"CLIENT", "ADMIN", "VENDOR", "DELIVERY", "MANAGER", "SUPERVISOR"})
     * ),
     * @OA\Parameter(
     * name="per_page",
     * in="query",
     * description="Items per page",
     * required=false,
     * @OA\Schema(type="integer", default=15)
     * ),
     * @OA\Response(
     * response=200,
     * description="List of users",
     * @OA\JsonContent(
     * type="object",
     * @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/User")),
     * @OA\Property(property="message", type="string", example="Users retrieved successfully")
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Forbidden - Admin role required"
     * )
     * )
     */
    public function index(Request $request)
    {
        // Vérification d'accès : Seuls les admins, managers et superviseurs peuvent lister tous les utilisateurs
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json([
                'message' => 'Access denied. Admin, Manager, or Supervisor role required.'
            ], 403);
        }

        $query = User::orderBy('created_at', 'desc');

        // Filtrage par rôle (assurez-vous d'utiliser les constantes du modèle pour la validation)
        $validRoles = [User::ROLE_CLIENT, User::ROLE_ADMIN, User::ROLE_VENDOR, User::ROLE_DELIVERY, User::ROLE_MANAGER, User::ROLE_SUPERVISOR];
        
        if ($request->has('role') && in_array(strtoupper($request->role), $validRoles)) {
            $query->where('role', strtoupper($request->role));
        }

        $users = $query->paginate($request->get('per_page', 15));

        return response()->json([
            'data' => $users->items(),
            'message' => 'Users retrieved successfully',
        ], 200);
    }

    /**
     * @OA\Post(
     * path="/api/users",
     * summary="Create a new user (Admin/Manager/Supervisor only)",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name", "email", "password", "role"},
     * @OA\Property(property="name", type="string", example="Jane Doe"),
     * @OA\Property(property="email", type="string", format="email", example="jane@example.com"),
     * @OA\Property(property="password", type="string", format="password", example="password123"),
     * @OA\Property(property="password_confirmation", type="string", format="password", example="password123"),
     * @OA\Property(
     * property="role", 
     * type="string", 
     * enum={"CLIENT", "ADMIN", "VENDOR", "DELIVERY", "MANAGER", "SUPERVISOR"},
     * example="CLIENT"
     * ),
     * @OA\Property(property="phone", type="string", example="+33612345678"),
     * @OA\Property(property="address", type="string", example="123 Rue de Paris")
     * )
     * ),
     * @OA\Response(
     * response=201,
     * description="User created successfully",
     * @OA\JsonContent(
     * @OA\Property(property="message", type="string", example="User created successfully"),
     * @OA\Property(property="data", ref="#/components/schemas/User")
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Forbidden - Admin/Manager/Supervisor role required"
     * ),
     * @OA\Response(
     * response=422,
     * description="Validation error"
     * )
     * )
     */
    public function store(Request $request)
    {
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json([
                'message' => 'Access denied. Admin, Manager, or Supervisor role required.'
            ], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => [
                'required',
                Rule::in(User::ROLE_CLIENT, User::ROLE_ADMIN, User::ROLE_VENDOR, User::ROLE_DELIVERY, User::ROLE_MANAGER, User::ROLE_SUPERVISOR)
            ],
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => strtoupper($validated['role']),
            'phone' => $validated['phone'] ?? null,
            'address' => $validated['address'] ?? null,
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    /**
     * @OA\Get(
     * path="/api/users/{id}",
     * summary="Get user details",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * description="User ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(
     * response=200,
     * description="User details",
     * @OA\JsonContent(
     * @OA\Property(property="data", ref="#/components/schemas/User"),
     * @OA\Property(property="message", type="string", example="User retrieved successfully")
     * )
     * ),
     * @OA\Response(
     * response=404,
     * description="User not found"
     * )
     * )
     */
    public function show(User $user)
    {
        return response()->json([
            'data' => $user,
            'message' => 'User retrieved successfully'
        ]);
    }

    /**
     * @OA\Put(
     * path="/api/users/{id}",
     * summary="Update user (Admin/Manager/Supervisor only)",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * description="User ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\JsonContent(
     * required={"name", "email", "role"},
     * @OA\Property(property="name", type="string", example="John Doe Updated"),
     * @OA\Property(property="email", type="string", format="email", example="john.updated@example.com"),
     * @OA\Property(
     * property="role", 
     * type="string", 
     * enum={"CLIENT", "ADMIN", "VENDOR", "DELIVERY", "MANAGER", "SUPERVISOR"},
     * example="ADMIN"
     * ),
     * @OA\Property(property="password", type="string", format="password", example="newpassword123"),
     * @OA\Property(property="password_confirmation", type="string", format="password", example="newpassword123")
     * )
     * ),
     * @OA\Response(
     * response=200,
     * description="User updated successfully",
     * @OA\JsonContent(
     * @OA\Property(property="message", type="string", example="User updated successfully"),
     * @OA\Property(property="data", ref="#/components/schemas/User")
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Forbidden - Admin/Manager/Supervisor role required"
     * ),
     * @OA\Response(
     * response=422,
     * description="Validation error"
     * ),
     * @OA\Response(
     * response=404,
     * description="User not found"
     * )
     * )
     */
    public function update(Request $request, User $user)
    {
        // Vérification d'accès : Seuls les admins, managers et superviseurs peuvent modifier les utilisateurs
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json([
                'message' => 'Access denied. Admin, Manager, or Supervisor role required.'
            ], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)
            ],
            'role' => [
                'required',
                Rule::in(User::ROLE_CLIENT, User::ROLE_ADMIN, User::ROLE_VENDOR, User::ROLE_DELIVERY, User::ROLE_MANAGER, User::ROLE_SUPERVISOR)
            ],
            'password' => 'nullable|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $updateData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => strtoupper($validated['role']),
            'phone' => $validated['phone'] ?? $user->phone,
            'address' => $validated['address'] ?? $user->address,
        ];

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($validated['password']);
        }

        $user->update($updateData);

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ]);
    }

    /**
     * @OA\Delete(
     * path="/api/users/{id}",
     * summary="Delete user (Admin/Manager/Supervisor only)",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\Parameter(
     * name="id",
     * in="path",
     * required=true,
     * description="User ID",
     * @OA\Schema(type="integer")
     * ),
     * @OA\Response(
     * response=200,
     * description="User deleted successfully",
     * @OA\JsonContent(
     * @OA\Property(property="message", type="string", example="User deleted successfully")
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Forbidden - Admin/Manager/Supervisor role required"
     * ),
     * @OA\Response(
     * response=404,
     * description="User not found"
     * )
     * )
     */
    public function destroy(User $user)
    {
        // Vérification d'accès : Seuls les admins, managers et superviseurs peuvent supprimer des utilisateurs
        if (!auth()->user()->isAdmin() && !auth()->user()->isManager() && !auth()->user()->isSupervisor()) {
            return response()->json([
                'message' => 'Access denied. Admin, Manager, or Supervisor role required.'
            ], 403);
        }
        
        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }

    /**
     * @OA\Get(
     * path="/api/users/roles/stats",
     * summary="Get user statistics by role",
     * tags={"Users"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(
     * response=200,
     * description="User statistics",
     * @OA\JsonContent(
     * type="object",
     * @OA\Property(property="total_users", type="integer", example=150),
     * @OA\Property(property="clients_count", type="integer", example=120),
     * @OA\Property(property="admins_count", type="integer", example=5),
     * @OA\Property(property="vendors_count", type="integer", example=15),
     * @OA\Property(property="delivery_count", type="integer", example=5),
     * @OA\Property(property="managers_count", type="integer", example=3),
     * @OA\Property(property="supervisors_count", type="integer", example=2)
     * )
     * )
     * )
     */
    public function roleStats()
    {
        $stats = [
            'total_users' => User::count(),
            'clients_count' => User::clients()->count(),
            'admins_count' => User::admins()->count(),
            'vendors_count' => User::vendors()->count(),
            'delivery_count' => User::delivery()->count(),
            'managers_count' => User::managers()->count(),
            'supervisors_count' => User::supervisors()->count(),
        ];

        return response()->json($stats);
    }
}