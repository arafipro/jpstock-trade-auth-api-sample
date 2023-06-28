<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $token = $user->createToken('main')->plainTextToken;

        return response(['user' => $user, 'token' => $token], 200);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $remember = $credentials['remember'] ?? false;
        unset($credentials['remember']);

        if (! Auth::attempt($credentials, $remember)) {
            return response(['error' => 'Invalid credentials'], 422);
        }
        $user = Auth::user();
        $token = $user->createToken('main')->plainTextToken;

        return response(['user' => $user, 'token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();

        return response(['message' => 'Logout successful'], 200);
    }
}
