<?php


namespace App\Http\Request;


class FreelancerRequest extends ApiRequest
{
    public function rules() {
        return [
            'name' => 'required|string',
            'price' => 'required|int',
            'email' => 'required|string',
            'phone' => 'string',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name is required!',
            'price.required' => 'Price is required!',
            'email.required' => 'Email is required!',
            'phone.required' => 'Phone is required!',

        ];
    }



}
