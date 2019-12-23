<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\UserController;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function edit($id) {
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();
        return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));
    }

    public function update(Request $request, $id) {
        $user = User::whereId($id)->firstOrFail();

        $user->syncRoles($request->get('role'));

        return back()->with('status', 'User and Role is successfully jointed!!!');
    }
}
