<?php

namespace App\Http\Controllers\Api\Task;

use App\Actions\Task\CreateTaskAction;
use App\Enums\Task\TaskstatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Resources\Task\TaskResource;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function __construct(
        private CreateTaskAction $createTaskAction
    ) {
        //
    }

    /**
     * @param  StoreTaskRequest  $request
     * @return JsonResponse
     */
    public function store(StoreTaskRequest $request): JsonResponse
    {
        $task = $this->createTaskAction->run($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Task was created successfully',
            'data' => new TaskResource($task),
        ]);
    }

    /**
     * Get all task status list
     *
     * @return JsonResponse
     */
    public function getAllTaskStatus(): JsonResponse
    {
        return response()->json([
            TaskstatusEnum::cases(),
        ]);
    }
}
