<?php

namespace App\Services\UserPermission\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRepository
{
    public function getRoles(): Collection
    {
        return Role::query()->get();
    }

    public function create(array $roleData, array $permissions = []): Role
    {
        $role = Role::create($roleData);

        $this->syncPermissions($role, $permissions);

        return $role;
    }

    public function update(int $id, array $roleData, array $permissions = []): Role
    {
        $role = Role::findById($id);
        $role->name = $roleData['name'];
        $role->save();

        $this->syncPermissions($role, $permissions);

        return $role;
    }

    public function getById(int $id): Role
    {
        return Role::findById($id);
    }

    public function getAppRoutes(): array
    {
        $routes = collect(Route::getRoutes()->getRoutesByName())->map(function ($route) {
            if (str_contains($route->getName(), 'admin.')) {
                return $route->getName();
            }

            return null;
        })->filter(fn($route) => !empty($route))->values()->groupBy(function ($route) {
            $routePath = explode('.', $route);

            return $routePath[1];
        });

        return $routes->toArray();
    }

    private function syncPermissions(Role $role, array $permissions): void
    {
        foreach ($permissions as $permissionName => $permissionStatus) {
            $permission = Permission::findOrCreate($permissionName);
            if ($permissionStatus) {
                $role->givePermissionTo($permission);
            } else {
                $role->revokePermissionTo($permission);
            }
        }
    }

    public function delete(int $id): void
    {
        $entity = $this->getById($id);
        $entity->delete();
    }
}
