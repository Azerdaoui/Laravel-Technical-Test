<?php

namespace App\Http\Requests\Task;

use App\Enums\Task\TaskstatusEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:250',
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'status' => [new Enum(TaskstatusEnum::class), 'required', 'string'],
            'description' => 'nullable|string|max:4000'
        ];
    }
}
