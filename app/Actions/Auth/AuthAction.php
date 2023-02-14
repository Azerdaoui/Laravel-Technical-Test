<?php

namespace App\Actions\Auth;

use App\Actions\User\CreateUserAction;
use App\Models\User;

class AuthAction
{
    public function __construct(
        private CreateUserAction $createUserAction
    ) {
    }

    public function attempt(array $credentials)
    {
        return auth()->attempt($credentials);
    }

    public function generateToken(User $user): string
    {
        return auth()->login($user);
    }

    public function createUser(array $data): User
    {
        return $this->createUserAction->run($data);
    }

    public function user()
    {
        return auth()->user();
    }

    public function refreshToken()
    {
        return auth()->refresh();
    }

    public function logout()
    {
        auth()->logout();
    }
}
