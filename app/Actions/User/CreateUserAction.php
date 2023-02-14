<?php

namespace App\Actions\User;

use App\Repositories\User\UserRepository;

class CreateUserAction
{
    public function __construct(
        private UserRepository $userRepository
    ) {
        //
    }

    public function run(array $data)
    {
        return $this->userRepository->create($data);
    }
}
