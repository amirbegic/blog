<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertTaskRequest extends FormRequest
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
            'userID' => ['required', 'integer', 'exists:users,id'],
            'task' => ['required', 'string'],
            //umjesto funkcije validator u controlleru mozemo staviti ovo
        ];
    }
}
