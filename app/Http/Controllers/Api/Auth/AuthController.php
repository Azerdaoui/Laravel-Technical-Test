<?php

namespace App\Http\Controllers\Api\Auth;

use App\Actions\Auth\AuthAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        private AuthAction $authAction
    ) {
        //
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (! $token = $this->authAction->attempt($credentials)) {
            return response()->json([
                'status' => 'error',
                'error' => 'Unauthorized',
            ], 401);
        }

        return response()->json([
            'status' => 'success',
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires' => Carbon::now()->addDays(1)->timestamp,
        ], 200);
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);

        $user = $this->authAction->createUser($data);

        $token = $this->authAction->generateToken($user);

        return response()->json([
            'status' => 'success',
            'user' => new UserResource($user),
            'access_token' => $token,
            'type' => 'bearer',
        ]);
    }

    public function refresh(): JsonResponse
    {
        $user = auth()->user();

        $token = $this->authAction->generateToken($user);

        return response()->json([
            'status' => 'success',
            'user' => new UserResource($user),
            'access_token' => $token,
            'type' => 'bearer',
        ]);
    }

    public function logout(): JsonResponse
    {
        $this->authAction->logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }
}
