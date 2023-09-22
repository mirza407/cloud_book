<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserRoleController extends Controller
{

    public function __construct()
    {

    }
    public function index()
    {

        $user = auth()->user();
        if(!$user->hasrole('Author')){
            return redirect()->route('home');
        }
        $users = User::all();
        $roles = Role::all();

        return view('user-roles.index', compact('users', 'roles'));
    }
    public function show($id)
    {
        // Retrieve the user role by its ID
        $role = Role::findOrFail($id);

        // Pass the role data to the view
        return view('user-roles.show', compact('role'));
    }
    public function store(Request $request)
    {
        $user = User::findOrFail($request->input('user_id'));
        $role = Role::findOrFail($request->input('role_id'));

        $user->assignRole($role);

        return redirect()->route('user-roles.index')->with('success', 'Role assigned successfully.');
    }

    public function destroy($user,$role)
    {

        DB::table('role_user')
            ->where('user_id', $user)
            ->where('role_id', $role)
            ->delete();
        return redirect()->route('user-roles.index')->with('success', 'Role removed from the user successfully.');
    }
}
