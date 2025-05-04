<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user= User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Credenciales invalidas'], 401);
        }

        $token=$user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }


    public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        return response()->json(['message' => 'Usuario creado exitosamente', 'user' => $user], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete(); 
        return response()->json(['masaje'=>'sesion cerrada correctamente']);

    }
}
