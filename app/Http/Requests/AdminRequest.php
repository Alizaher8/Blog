<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|max:100|min:2',
            'firstname' => 'max:100',
            'lastname' => 'max:100',
            'email' => 'required|email|max:255',
            'image'=> 'image',
            'address' => 'max:100',
            'city' => 'max:100',
            'country' =>'max:100',
            'postal' => 'max:100',
            'about' => 'max:255'
        ];
    }
    public function messages()
    {
        return[
            'username.required'=> __('messages.The Name is required'),
            'username.max'=> __('messages.The UserName is tall max 100 characters'),
            'username.min'=> __('messages.The UserName is short min 2 characters'),
            'firstname.max'=> __('messages.The FirstName is tall max 100 characters'),
            'lastname.max'=> __('messages.The LastName is tall max 100 characters'),
            'email.required'=> __('messages.The Email is required'),
            'email.email'=> __('messages.The Email must be email format'),
            'email.max'=> __('messages.The Email is tall max 255 characters'),
            'city.max'=> __('messages.The City is tall max 100 characters'),
            'country.max'=> __('messages.The Country is tall max 100 characters'),
            'postal.max'=> __('messages.The Postal is tall max 100 characters'),
            'adout.max'=> __('messages.The About is tall max 255 characters'),
             'image.image'=>__('message.The Photo must be image type')
              ];
    }

}
