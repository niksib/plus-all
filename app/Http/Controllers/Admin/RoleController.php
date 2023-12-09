<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Services\UserPermission\Repositories\RoleRepository;
use App\Services\UserPermission\Requests\RoleCreateRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class RoleController extends Controller
{
    public function __construct()
    {
        ini_set('max_execution_time', '0');
    }

    public function index(RoleRepository $roleRepository): Response
    {
        $roles = $roleRepository->getRoles();

        return Inertia::render('Role/List', [
            'roles' => $roles
        ]);
    }

    public function create(RoleRepository $roleRepository): Response
    {
        return Inertia::render('Role/Create', [
            'routes' => $roleRepository->getAppRoutes()
        ]);
    }

    public function store(RoleCreateRequest $request, RoleRepository $roleRepository): RedirectResponse
    {
        try {
            $roleRepository->create($request->post('role'), $request->post('permissions'));

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.roles.index');
    }

    public function edit(int $role, RoleRepository $roleRepository): Response
    {
        $role = $roleRepository->getById($role);
        $routes = $roleRepository->getAppRoutes();
        $permissions = $role->permissions
            ->keyBy('name')
            ->map(fn($permission) => true)
            ->toArray();

        return Inertia::render('Role/Edit', [
            'role' => $role,
            'routes' => $routes,
            'permissions' => $permissions ?: null
        ]);
    }

    public function update(
        int               $role,
        RoleCreateRequest $request,
        RoleRepository    $roleRepository
    ): RedirectResponse
    {
        try {
            $role = $roleRepository->update($role, $request->post('role'), $request->post('permissions'));

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.roles.edit', ['role' => $role->id]);
    }

    public function destroy(int $id, RoleRepository $roleRepository)
    {
        try {
            $roleRepository->delete($id);

            Session::flash('message.text', 'Deleted!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.roles.index');
    }
}
