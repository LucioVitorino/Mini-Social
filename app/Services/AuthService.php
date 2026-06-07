<?php

namespace App\Services;

use App\Models\User;
use App\DTOs\Auth\LoginDTO;
use App\DTOs\RegisterDTO;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function register(RegisterDTO $data): array
    {
        $user = User::create([
            'name' => $data->name,
            'email' => $data->email,
            'Password' => bcrypt($data->password),
        ]);
        $toke = $user->createToken('app-token')->plainTextToken;
        return ['user' => new UserResource($user), 'token' => $toke];
    }
}