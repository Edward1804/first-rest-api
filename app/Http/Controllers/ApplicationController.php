<?php


namespace App\Http\Controllers;


use App\Http\Request\ApplicationRequest;
use App\Models\Application;

class ApplicationController extends ApiControllers
{

    /**
     * ApplicationController constructor.
     * @param Application $model
     * @param ApplicationRequest $request
     */
    public function __construct(Application $model, ApplicationRequest $request)
    {
        $this->model = $model;
        $this->request = $request;
    }
}
