<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(['user'=> auth()->user(),'token'=> "Bearer ".$token]);
    }
    public function register(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $role_seller = Role::where("name", "seller")->first();
        $role_manager  = Role::where("name", "manager")->first();
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string',
            'phone' => 'required|string',
            'role' => 'required|string'
        ]);

        $user =  User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'role' => $request->get('role'),
            'password' => Hash::make($request->get('password')),
        ]);
        if ($request->get("role") == "seller"){
            $user->roles()->attach($role_seller);
        } elseif ($request->get("role") == "manager"){
            $user->roles()->attach($role_manager);
        }
        $token = auth()->attempt(\request(['email','password']));
        return response()->json(['user'=>$user,'token'=>"Bearer ".$token])->setStatusCode(201,"Object created");
    }


    public function update(Request $request, $id)
    {
       //
    }
    public function destroy($id)
    {
        //
    }
}
