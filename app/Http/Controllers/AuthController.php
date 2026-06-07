<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\DTOs\RegisterDTO;
use App\Services\AuthService;

class AuthController extends Controller
{
    //
    public function  __construct(private AuthService $authService){}

    public function register(Request $request): JsonResponse
    {
        $dto = RegisterDTO::from($request->all()); 
        return response()->json($this->authService->register($dto), 201);
    }
}
