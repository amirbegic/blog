<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InsertCityRequest extends FormRequest
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
        $request = request(); //poslano sa forme
        return [
            'name' => [
                /**'required', 'string','unique:cities,name'*/
                "required",
                "string",
                Rule::unique('cities', 'name')->where(function (Builder $query) use ($request) {
                    return $query->where('countriesID', "=", $request->countriesID);
                })
            ],

            'countriesID' => ['required', 'integer', 'exists:countries,id'],

        ];
    }
}
