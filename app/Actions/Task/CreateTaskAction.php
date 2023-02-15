<?php

namespace App\Actions\Task;

use App\Models\Task;
use App\Repositories\Task\TaskRepository;

class CreateTaskAction
{
    public function __construct(
        private TaskRepository $taskRepository
    ) {
        //
    }

    /**
     * @param  array  $data
     * @return Task
     */
    public function run(array $data): Task
    {
        return $this->taskRepository->create($data);
    }
}
