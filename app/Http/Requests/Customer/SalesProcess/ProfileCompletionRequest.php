<?php

namespace App\Http\Requests\Customer\SalesProcess;

use App\Rules\NationalCode;
use Illuminate\Foundation\Http\FormRequest;

class ProfileCompletionRequest extends FormRequest
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
            'first_name' => 'sometimes|required',
            'last_name' => 'sometimes|required',
            'email' => 'sometimes|email|unique:users,email',
            'mobile' => 'sometimes|min:10|max:13|unique:users,mobile',
            'national_code' => ['sometimes', 'required', 'unique:users,national_code', new NationalCode()],
        ];
    }
}
