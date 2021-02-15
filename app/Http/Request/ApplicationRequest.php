<?php


namespace App\Http\Request;


class ApplicationRequest extends ApiRequest
{
    public function rules() {
        return [
            'comments' => 'required|string',
            'freelance_id' => 'required|int',
            'order_id' => 'required|int',
        ];
    }

    public function messages() {
        return [
            'comments.required' => 'Comments is required!',
            'freelance_id.required' => 'Freelance_id is required!',
            'order_id.required' => 'Order_id is required!',

        ];
    }

}
