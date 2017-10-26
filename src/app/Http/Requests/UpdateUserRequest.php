<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    public function rules($id)
    {
        $user = User::findorFail($id);

        return [
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'min:6|confirmed',
            'is_admin' => 'in:' . User::ADMIN_USER . ',' . User::REGULAR_USER,
            'phone_number' => 'require',
            'gender' => 'in:' . User::STR_FEMALE . ',' . User::STR_MALE
        ];
    }
}
