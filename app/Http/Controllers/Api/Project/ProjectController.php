<?php

namespace App\Http\Controllers\Api\Project;

use App\Actions\Project\CreateProjectAction;
use App\Actions\Project\DatatableAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Resources\Project\ProjectResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectController extends Controller
{
    public function __construct(
        private CreateProjectAction $createProjectAction,
        private DatatableAction $datatableAction
    ) {
        //
    }

    /**
     * @param  Request  $request
     * @return JsonResource
     */
    public function datatable(Request $request): JsonResource
    {
        $input = $request->all();

        $projects = $this->datatableAction->run($input);

        return ProjectResource::collection($projects);
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
