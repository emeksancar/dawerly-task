<?php

namespace App\Http\Controllers;

use App\Repositories\Reservations\ReservationRepository;
use App\Repositories\Services\ServiceRepository;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(Service $service, ServiceRepository $serviceRepository, ReservationRepository $reservationRepository)
    {
        $this->model = $service;
        $this->serviceRepository = $serviceRepository;
        $this->reservationRepository = $reservationRepository;
    }

    public function book() {
        $services = $this->serviceRepository->getServices();
        $route = "reservation.save";

        return view('index', compact('services', 'route'));
    }

    public function admin() {
        $reservations = $this->reservationRepository->getReservations();

        return view('admin', compact('reservations'));
    }
}
