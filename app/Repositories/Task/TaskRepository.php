<?php

namespace App\Repositories\Task;

use App\Models\Task;

class TaskRepository
{
    public function __construct(
        private Task $model
    ) {
        //
    }

    /**
     * @param  array  $data
     * @return Task
     */
    public function create(array $data): Task
    {
        return $this->model::create($data);
    }

    /**
     * @param  int  $taskId
     * @param  int  $userId
     * @return Task|null
     */
    public function assignTaskToUser(int $taskId, int $userId): ?Task
    {
        $task = $this->findOrFail($taskId);

        $task->user_id = $userId;

        $task->update();

        return $task;
    }

    /**
     * @param  int  $taskId
     * @return Task|null
     */
    public function findOrFail(int $taskId): ?Task
    {
        return $this->model::findOrFail($taskId);
    }
}
