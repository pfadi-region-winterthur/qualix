<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeobachtungUpdateRequest extends FormRequest
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
            'kommentar' => 'required',
            'bewertung' => 'required|in:0,1,2',
            'block_id' => 'required|numeric',
            'ma_ids' => 'regex:/^\d+(,\d+)*$/|nullable',
            'qk_ids' => 'regex:/^\d+(,\d+)*$/|nullable',
        ];
    }
}
