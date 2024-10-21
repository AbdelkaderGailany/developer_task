<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = UserService::authenticate($request->input('email'), $request->input('password'));
        if ($user) {
            return Response::json(['status' => 'ok', 'message' => 'Hello ' . $user->name]);
        } else {
            return Response::json(['status' => 'error', 'message' => 'Invalid credentials'], 401);
        }
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return Response::json(['status' => 'ok', 'message' => 'User registered successfully']);
    }
}
