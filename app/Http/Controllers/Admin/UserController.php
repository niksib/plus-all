<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\User\Repositories\UserRepository;
use App\Services\User\Requests\UserCreateRequest;
use App\Services\User\Requests\UserUpdateRequest;
use App\Services\UserPermission\Repositories\RoleRepository;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->getUsers();

        return Inertia::render('User/List', [
            'users' => $users
        ]);
    }

    public function create(RoleRepository $roleRepository): Response
    {
        $roles = $roleRepository->getRoles();

        return Inertia::render('User/Create', [
            'roles' => $roles
        ]);
    }

    public function store(UserCreateRequest $request, UserRepository $userRepository)
    {
        try {
            $userRepository->create($request->only(['name', 'email', 'password', 'role']));

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.users.index');
    }

    public function edit(
        int            $id,
        UserRepository $userRepository,
        RoleRepository $roleRepository
    ): Response
    {
        $user = $userRepository->getById($id);
        $user->role = $user->roles()->first()?->id;
        $roles = $roleRepository->getRoles();

        return Inertia::render('User/Edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update(UserUpdateRequest $request, UserRepository $userRepository)
    {
        try {
            $user = $userRepository->update($request->user, $request->only(['name', 'email', 'password', 'role']));

            Session::flash('message.text', 'Stored!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.users.edit', ['user' => $user->id]);
    }

    public function destroy(int $id, UserRepository $userRepository)
    {
        try {
            $userRepository->delete($id);

            Session::flash('message.text', 'Deleted!');
            Session::flash('message.status', 'green');
        } catch (Exception $exception) {
            Session::flash('message.text', $exception->getMessage());
            Session::flash('message.status', 'red');
        }

        return Redirect::route('admin.users.index');
    }
}
