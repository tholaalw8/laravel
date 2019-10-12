<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Role;
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

//        $roles = Role::create(['name' => 'manager']);
//        $role2 = Role::create(['name' => 'clerk']);
//
//
//        $permission = Permission::create(['name' => 'edit ticket']);
//        $permission2 = Permission::create(['name' => 'view ticket']);
//
//        $roles->givePermissionTo($permission);
//        $roles->givePermissionTo($permission2);
//        $role2->givePermissionTo($permission2);



//
////
//     auth()->user()->assignRole('clerk');

//
//        Role::create(['name'=>'Admin','display_name'=>'Administrator','description'=>'To manage the app']);

        return view('home');
    }
}
