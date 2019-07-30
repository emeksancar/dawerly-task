<?php

namespace App\Repositories\Reservations;
use App\Reservation;
use Illuminate\Http\Request;


class ReservationRepository implements ReservationRepositoryInterface
{
    public function __construct(Reservation $reservation)
    {
        $this->model = $reservation;
    }

    public function store($params) {
        return $this->model->create($params)->id;
    }

    public function getReservations() {
        return $this->model
            ->join('services', 'reservations.service', '=', 'services.id')
            ->select('reservations.*', 'services.name', 'services.price')
            ->get();
    }
}
