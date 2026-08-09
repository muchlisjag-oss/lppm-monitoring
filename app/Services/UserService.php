<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function paginate(
        ?string $search = null,
        ?string $role = null,
        int $perPage = 10
    ): LengthAwarePaginator {
        return User::query()
            ->with('roles')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    $query
                        ->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                });
            })
            ->when($role, function ($query) use ($role) {
                $query->role($role);
            })
            ->latest()
            ->paginate($perPage)
            ->withQueryString();
    }

    public function create(array $data): User
    {
        $role = $data['role'];
        unset($data['role']);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        $user->assignRole($role);

        return $user;
    }

    public function update(User $user, array $data): User
    {
        $role = $data['role'] ?? null;

        unset($data['role']);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        if ($role) {
            $user->syncRoles([$role]);
        }

        return $user->fresh('roles');
    }

    public function delete(User $user): void
    {
        $user->delete();
    }
}