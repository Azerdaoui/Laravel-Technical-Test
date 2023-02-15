<?php

namespace App\Repositories\Project;

use App\Models\Project;

class ProjectRepository
{
    public function __construct(
        private Project $model
    ) {
        //
    }

    /**
     * create a project resource
     *
     * @param array daba
     * @return Project project created
     */
    public function create(array $data): Project
    {
        return $this->model::create($data);
    }
}
