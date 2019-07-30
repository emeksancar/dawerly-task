<?php

namespace App\Repositories\Services;
use App\Service;
class ServiceRepository implements ServiceRepositoryInterface
{
    public function __construct(Service $reservation)
    {
        $this->model = $reservation;
    }

    public function getServices() {
        return $this->model->get();
    }
}
