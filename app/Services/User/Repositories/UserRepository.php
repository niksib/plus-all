<?php

namespace App\Services\User\Repositories;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository
{
    public function getUsers(): LengthAwarePaginator
    {
        return User::paginate(25);
    }

    public function getById(int $id): User
    {
        return User::where('id', $id)->firstOrFail();
    }

    public function create(array $data): User
    {
        $user = new User();
        $data['password'] = Hash::make($data['password']);
        $user->fill($data);
        $user->save();

        $role = Role::findById($data['role']);
        $user->syncRoles($role);

        return $user;
    }

    public function update(int $id, array $data): User
    {
        $user = $this->getById($id);

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        unset($data['password']);

        $user->fill($data);
        $user->save();

        $role = Role::findById($data['role']);
        $user->syncRoles($role);

        return $user;
    }

    public function delete(int $id): void
    {
        $user = $this->getById($id);
        $user->delete();
    }
}
