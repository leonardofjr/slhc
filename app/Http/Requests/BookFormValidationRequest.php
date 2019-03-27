<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookFormValidationRequest extends Request
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
                'name' => 'required|min:2|max:25',
                'phone' => 'required',
                'email' => 'required|email',
                'interests' => 'required',
                'date' => 'required',
                'g-recaptcha-response' => 'required',

        ];
    }

    /**
     * Overwriting messages method.
     *
     * @return array
     */
    public function messages()
    {


        return [
                'name.required' => 'Name field is required',
                'phone.required' => 'Phone field is required',
                'email.required' => 'Email field is required',
                'date.required' => 'Please select a preferred date',
        ];
    }
}
