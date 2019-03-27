<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormValidationRequest extends Request
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
                'email' => 'required|email',
                'inquiry' => 'required',
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
                'name.min' => 'Name field must be greater than 2 characters',
                'name.max' => 'Name field may not be greater than 25 characters',
                'email.required' => 'Email field is required',
                'email.email' => 'Enter a valid email',
                'inquiry.required' => 'Message field is required',
                
        ];
    }
}
