<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProjectRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('projects')->ignore($this->project),
            ],
            'description' => 'required',
            'owner' => ['nullable', 'exists:users,id']
        ];
    }


    /**
     * @return string[]
     */
    public function messages()
    {
        return ['name.unique' => 'Project title is already in use'];
    }
}
