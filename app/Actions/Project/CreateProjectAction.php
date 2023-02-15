<?php

namespace App\Actions\Project;

use App\Repositories\Project\ProjectRepository;

class CreateProjectAction
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {
      //
    }

    /**
     * @param  array  $data
     * @return [type]
     */
    public function run(array $data)
    {
        return $this->projectRepository->create($data);
    }
}
