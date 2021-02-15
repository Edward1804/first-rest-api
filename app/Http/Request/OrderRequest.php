<?php


namespace App\Http\Request;


class OrderRequest extends ApiRequest
{

    public function rules() {
        return [
            'description' => 'required|string',
            'customer_id' => 'required|int',
            'application_id' => 'required|int',
        ];
    }

    public function messages() {
        return [
            'description.required' => 'Description is required!',
            'customer_id.required' => 'Customer_id is required!',
            'application_id.required' => 'Application_id is required!',

        ];
    }

}
