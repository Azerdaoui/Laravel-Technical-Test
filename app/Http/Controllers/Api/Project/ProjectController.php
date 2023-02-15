<?php

namespace App\Http\Controllers\Api\Project;

use App\Actions\Project\CreateProjectAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Resources\Project\ProjectResource;

class ProjectController extends Controller
{
    public function __construct(
        private CreateProjectAction $createProjectAction
    ) {
        //
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $project = $this->createProjectAction->run($data);

        return response()->json([
            'status' => 'success',
            'project' => new ProjectResource($project),
        ]);
    }
}
