<?php
namespace App\Repositories\Reservations;

use Illuminate\Http\Request;

interface ReservationRepositoryInterface {
    public function store($params);
    public function getReservations();
}
