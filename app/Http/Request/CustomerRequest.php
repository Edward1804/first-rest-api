<?php


namespace App\Http\Request;


class CustomerRequest extends ApiRequest
{
    public function rules() {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'string',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
            'phone.required' => 'Phone is required!',

        ];
    }

}
