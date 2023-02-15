<?php

namespace App\Actions\Project;

use App\Repositories\Project\ProjectRepository;

class DatatableAction
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {
        //
    }

    /**
     * @param array $input
     * 
     * @return [type]
     */
    public function run(array $input)
    {
        return $this->projectRepository->datatable($input);
    }
}
