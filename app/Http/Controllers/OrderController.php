<?php


namespace App\Http\Controllers;


use App\Http\Request\OrderRequest;
use App\Models\Order;

class OrderController extends ApiControllers
{

    /**
     * OrderController constructor.
     * @param Order $model
     * @param OrderRequest $request
     */
    public function __construct(Order $model, OrderRequest $request)
    {
        $this->model = $model;
        $this->request = $request;
    }
}
