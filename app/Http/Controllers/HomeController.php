<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $role = Role::create(['name' => 'editor']);
        //$permission = Permission::create(['name' => 'delete articles']);

//        $role=Role::findById(1);
//        $permissions=Permission::all();
//        $role->syncPermissions($permissions);
        //$role->revokePermissionTo($permissions);
//        $role->givePermissionTo($permission);
//        $permission->assignRole($role);

        //auth()->user()->assignRole('writer');
//        $permissionNames = auth()->user()->getAllPermissions();
       // $roles = auth()->user()->getRoleNames();
       // $users = auth()->user()->role('writer')->get();
//        $users =auth()->user()->permission('edit articles')->get();
//        $all_users_with_all_their_roles = User::with('roles')->get();
//        $all_roles_in_database = Role::all()->pluck('name');
//        return $all_roles_in_database;
          //auth()->user()->revokePermissionTo('writing  articles');
          //auth()->user()->syncPermissions(['writing  articles','edit articles']);
           if (auth()->user()->can('edit articles')){
               return 'abc';
           };


        return view('home');
    }
}
