<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
    public function __construct(
        private User $model
    ) {
        //
    }

    /**
     * Create a user resource
     *
     * @param array data
     * @return App\Models\User user created
     */
    public function create(array $data)
    {
        return $this->model::create($data);
    }
}
