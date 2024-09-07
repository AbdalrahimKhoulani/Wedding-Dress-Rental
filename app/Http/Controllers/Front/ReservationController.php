<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Http\Requests\UserProfileRequest;
use App\Models\Reservation;
use App\Services\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    private $reservation_service;

    public function __construct(ReservationService $reservation_service)
    {
        $this->reservation_service = $reservation_service;
    }

    public function index(){
       $reservations = $this->reservation_service->getReservationsForUser(Auth::id(),10);
        if(count($reservations) > 0){
            return view('front.reservation.index')->with('reservations',$reservations);
        }
        else{
            return to_route('home');
        }
    }
    public function store(ReservationRequest $request)
    {
        $reservation = $request->only(["dress_id", "size_id", "dress_size_id", "to", "from"]);
        $reservation['user_id'] = Auth::id();
        $reservation = $this->reservation_service->createReservation($reservation);
        if($reservation){
            return redirect()->back()->with('success','Reservation Request Added Successfuly');
        }
        else{
            return redirect()->back()->with('error','Reservation Request Failed');
        }
    }
}
