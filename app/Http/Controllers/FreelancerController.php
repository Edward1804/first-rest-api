<?php


namespace App\Http\Controllers;


use App\Http\Request\FreelancerRequest;
use App\Models\Freelancer;

class FreelancerController extends ApiControllers
{

    /**
     * FreelancerController constructor.
     * @param Freelancer $model
     * @param FreelancerRequest $request
     */
    public function __construct(Freelancer $model)
    {
        $this->model = $model;
    }

    /**
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function createFreelancer(FreelancerRequest $request) {

        return $this->create($request);
    }

    public function updateFreelancer(int $entityId, FreelancerRequest $request) {

        return parent::update($entityId, $request);
    }


}
