<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $project = $this->route('project');

    return [
        'title' => [
            'required',
            Rule::unique('projects', 'title')->ignore($project->slug),
            'min:3',
            'max:50',
        ],
        'type' => 'nullable|min:2|max:50',
        'visibility' => 'nullable|max:7',
        'slug' => 'unique:projects,slug',
        ];
    }

    public function withValidator($validator){
    $project = $this->route('project');

    $validator->addImplicitExtension('ignore_project_slug', function ($attribute, $value, $parameters, $validator) use ($project) {
        return Rule::unique('projects', 'title')->ignore($project->slug)->ignore($value, 'slug');
    });

    return $validator;
}
}
