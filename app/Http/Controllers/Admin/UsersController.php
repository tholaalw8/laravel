<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(){
        $users = User::all();
        return  view('backend.users.index',compact('users'));
    }

    public function edit($id){
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->getRoleNames();

       return view('backend.users.edit',compact('user','roles','selectedRoles'));
    }

    public function update($id, UserEditFormRequest $request){
        $user = User::whereId($id)->firstOrFail();
        $user->name = $request->get('name');
        $user->email= $request->get('email');
        $password=$request->get('password');
        if($password != ""){
            $user->password = Hash::make($password);
        }

        $user->save();
        $user->assignRole($request->get('role'));

        return redirect(action('Admin\UsersController@edit',$user->id))->with('status','The User has been updated!');

    }




}




















