<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
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
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
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
