<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileRequest;
use App\Services\ReservationService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    private $user_service;
    private $reservation_service;

    public function __construct(UserService $user_service, ReservationService $reservation_service)
    {
        $this->middleware('auth');
        $this->user_service = $user_service;
        $this->reservation_service = $reservation_service;
    }

    public function show()
    {
        $user_id = Auth::id();
        $user = $this->user_service->getUserById($user_id);
        $latest_reservations = $this->reservation_service->getLatestReservationsForUser(Auth::id(),4);
        // dd(isset($latest_reservations));
        if(count($latest_reservations)>0){
            return view('front.profile.show')
            ->with('user', $user)
            ->with('latest_reservations', $latest_reservations);
        }
        else{
            return view('front.profile.show')
            ->with('user', $user)
            ->with('latest_reservations', [])
            ->with('warning', 'No reservations');
        }
    }

    public function update($user_id, UserProfileRequest $request)
    {
        $user_data = $request->only(['user_id', 'email', 'password', 'name', 'current_password']);
        if (Auth::attempt(['email' => $user_data['email'], 'password' => $user_data['current_password']])) {
            $result = $this->user_service->updateUser($user_data);
            if ($result) {
                return redirect()->back()->with('success', 'Information updated successfuly');
            } else {
                return redirect()->back()->with('error', 'Error occured while information update');
            }
        } else {
            return redirect()->back()->with('error', 'Current Password is invalid');
        }
    }
}
