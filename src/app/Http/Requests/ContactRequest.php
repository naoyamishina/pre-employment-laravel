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

    /**
     * お問合せ部署
     * @return int
     */
    public function getDepartmentId(): int
    {
        return (int) $this->input('department_id');
    }

    /**
     * 氏名
     * @return string
     */
    public function getName(): string
    {
        return $this->input('name');
    }

    /**
     * メールアドレス
     * @return string
     */
    public function getEmail(): string
    {
        return $this->input('email');
    }

    /**
     * お問合せ内容
     * @return string
     */
    public function getContents(): string
    {
        return $this->input('content');
    }

    /**
     * 年齢
     * @return int
     */
    public function getAge(): int
    {
        return (int) $this->input('age');
    }

    /**
     * 性別
     * @return int
     */
    public function getGender(): int
    {
        return (int) $this->input('gender');
    }

}
