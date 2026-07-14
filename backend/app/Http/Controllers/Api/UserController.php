<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index(Request $request)
    {
        try {
            // 🔥 PERBAIKAN: Hanya tampilkan users dengan role 'guru' untuk halaman guru
            $query = User::where('role', 'guru');

            // Filter by role if provided (untuk keperluan lain)
            if ($request->has('role')) {
                $role = $request->role;
                $query->where('role', 'like', '%' . $role . '%');
            }

            // Search by name or email
            if ($request->has('search')) {
                $search = $request->search;
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhere('wali_kelas', 'like', '%' . $search . '%')
                      ->orWhere('pembina_ekskul', 'like', '%' . $search . '%')
                      ->orWhere('pembina_p5', 'like', '%' . $search . '%');
                });
            }

            $users = $query->orderBy('name')->get();

            return response()->json([
                'success' => true,
                'data' => $users,
                'count' => $users->count()
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch users',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created user.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,guru',
            'wali_kelas' => 'nullable|string|max:255',
            'pembina_ekskul' => 'nullable|string|max:255',
            'pembina_p5' => 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'wali_kelas' => $request->wali_kelas,
                'pembina_ekskul' => $request->pembina_ekskul,
                'pembina_p5' => $request->pembina_p5,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        try {
            // 🔥 PERBAIKAN: Hanya boleh akses user dengan role guru
            if ($user->role !== 'guru') {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found or access denied'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $user
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified user.
     */
    public function update(Request $request, User $user)
    {
        // 🔥 PERBAIKAN: Hanya boleh update user dengan role guru
        if ($user->role !== 'guru') {
            return response()->json([
                'success' => false,
                'message' => 'Cannot update non-guru user'
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:8',
            'role' => 'sometimes|string|in:admin,guru',
            'wali_kelas' => 'nullable|string|max:255',
            'pembina_ekskul' => 'nullable|string|max:255',
            'pembina_p5' => 'nullable|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $updateData = [
                'name' => $request->name ?? $user->name,
                'email' => $request->email ?? $user->email,
                'role' => $request->role ?? $user->role,
                'wali_kelas' => $request->wali_kelas,
                'pembina_ekskul' => $request->pembina_ekskul,
                'pembina_p5' => $request->pembina_p5,
            ];

            // Only update password if provided
            if ($request->has('password') && $request->password) {
                $updateData['password'] = Hash::make($request->password);
            }

            $user->update($updateData);

            return response()->json([
                'success' => true,
                'message' => 'User updated successfully',
                'data' => $user
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified user.
     */
    public function destroy(User $user)
    {
        try {
            // 🔥 PERBAIKAN: Hanya boleh delete user dengan role guru
            if ($user->role !== 'guru') {
                return response()->json([
                    'success' => false,
                    'message' => 'Cannot delete non-guru user'
                ], 403);
            }

            // Prevent deleting yourself
            if (auth()->check() && $user->id === auth()->id()) {
                return response()->json([
                    'success' => false,
                    'message' => 'You cannot delete your own account'
                ], 422);
            }

            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'User deleted successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete user',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get users by role.
     */
    public function getByRole($role)
    {
        try {
            // Validasi role yang diizinkan
            if (!in_array($role, ['admin', 'guru'])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid role'
                ], 422);
            }

            $users = User::where('role', $role)
                        ->orderBy('name')
                        ->get();

            return response()->json([
                'success' => true,
                'data' => $users,
                'count' => $users->count()
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch users by role',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Search users.
     */
    public function search(Request $request)
    {
        try {
            // 🔥 PERBAIKAN: Default hanya search guru, kecuali jika ada parameter role
            $query = User::where('role', 'guru');

            if ($request->has('q')) {
                $search = $request->q;
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%')
                      ->orWhere('wali_kelas', 'like', '%' . $search . '%')
                      ->orWhere('pembina_ekskul', 'like', '%' . $search . '%')
                      ->orWhere('pembina_p5', 'like', '%' . $search . '%');
                });
            }

            if ($request->has('role')) {
                // Validasi role
                if (in_array($request->role, ['admin', 'guru'])) {
                    $query->where('role', $request->role);
                }
            }

            $users = $query->orderBy('name')->get();

            return response()->json([
                'success' => true,
                'data' => $users,
                'count' => $users->count()
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to search users',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get all admins (untuk keperluan lain jika diperlukan)
     */
    public function getAdmins()
    {
        try {
            $admins = User::where('role', 'admin')
                         ->orderBy('name')
                         ->get();

            return response()->json([
                'success' => true,
                'data' => $admins,
                'count' => $admins->count()
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch admins',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}