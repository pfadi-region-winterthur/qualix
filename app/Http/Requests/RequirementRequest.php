<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class RequirementRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'content' => 'required|max:255',
            'mandatory' => 'boolean',
            'blocks' => 'nullable|regex:/^\d+(,\d+)*$/|allExistInCourse',
        ];
    }

    public function attributes() {
        return Lang::get('t.models.requirement');
    }
}
