<?php

namespace App\Http\Controllers;

use App\Repositories\Reservations\ReservationRepository;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct(Reservation $reservation, ReservationRepository $reservationRepository)
    {
        $this->model = $reservation;
        $this->repository = $reservationRepository;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'service' => 'required',
            'reservation_date' => "required",
        ]);
        $all = $request->all();
        $id = $this->repository->store($all);
        if ($id != null) {
            $message = "Booking saved successfully";
        } else {
            $message = "Something went wrong, try again later.";
        }
        return redirect(route('service'))->with('message', $message)->with('route', 'service');
    }
}
