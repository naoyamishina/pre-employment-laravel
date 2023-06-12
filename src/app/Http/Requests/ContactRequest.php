<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'department_id' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'age' => ['required', 'integer', 'between:1,100'],
            'gender' => ['required', 'integer', 'between:1,3'],
            'content' => ['required', 'max:1000']
            ];
    }
}
