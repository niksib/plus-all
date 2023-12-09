<?php

namespace Database\Seeders;

use App\Models\User;
use App\Services\UserPermission\Repositories\RoleRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'admin@dforce.com')->first()) {
            $roleRepository = new RoleRepository();
            $routes = collect(Route::getRoutes()->getRoutesByName())->map(function ($route) {
                if (str_contains($route->getName(), 'admin.')) {
                    return $route->getName();
                }

                return null;
            })->filter(fn($route) => !empty($route))->map(fn() => true)->toArray();
            $role = $roleRepository->create(['name' => 'Admin'], $routes);

            $user = new User();
            $user->name = 'Dforce Admin';
            $user->email = 'admin@dforce.com';
            $user->password = Hash::make('12345678');
            $user->syncRoles($role);
            $user->save();
        }
    }
}
