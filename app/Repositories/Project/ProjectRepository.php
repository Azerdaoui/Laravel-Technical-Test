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

    public function datatable(array $input)
    {
        $keyword = $input['q'];
        $sortBy = $input['sort_by'];
        $sortDir = $input['sort'];

        if ($sortBy) {
            $query = $this->model::orderBy($sortBy, $sortDir);
        } else {
            $query = $this->model::orderBy('created_at', 'DESC');
        }

        if ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->Where('title', 'like', '%'.$keyword.'%');
            });
        }

        $query = $query->paginate(5);

        return $query->appends($input);
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
