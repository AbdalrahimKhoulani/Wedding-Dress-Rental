<?php

namespace App\Services;

use App\Models\Dress;
use App\Models\Reservation;

class ReservationService
{
    private $dress_service;

    public function __construct(DressService $dress_service)
    {
        $this->dress_service = $dress_service;
    }

    public function getReservationsForUser($user_id, $limit)
    {
        $reservations = Reservation::where('user_id', '=', $user_id)
            ->paginate($limit);
        foreach ($reservations as $key => $reservation) {
            $dress = $this->dress_service->getDressForReservation($reservation->dress_id);
            $reservations[$key]['dress_image'] = $dress['image'];
            $reservations[$key]['dress_name'] = $dress['name'];
            $reservations[$key]['dress_description'] = $dress['description'];
        }
        return $reservations;
    }

    public function getLatestReservationsForUser($user_id, $limit)
    {
        $reservations = Reservation::latest()->where('user_id', '=', $user_id)->take($limit)->get();
        foreach ($reservations as $key => $reservation) {
            $dress = $this->dress_service->getDressForReservation($reservation->dress_id);
            $reservations[$key]['dress_image'] = $dress['image'];
            $reservations[$key]['dress_name'] = $dress['name'];
            $reservations[$key]['dress_description'] = $dress['description'];
        }
        return $reservations;
    }

    public function createReservation($reservation)
    {
        $reservation['price'] = Dress::find($reservation['dress_id'])->price;

        $reservation_object = new Reservation();

        $reservation_object->user_id = $reservation['user_id'];
        $reservation_object->dress_id = $reservation['dress_id'];
        $reservation_object->size_id = $reservation['size_id'];
        $reservation_object->dress_size_id = $reservation['dress_size_id'];
        $reservation_object->price = $reservation['price'];
        $reservation_object->from = $reservation['from'];
        $reservation_object->to = $reservation['to'];

        // $reservation = Reservation::create([
        //     'dress_id' => $reservation['dress_id'],
        //     'size_id' => $reservation['size_id'],
        //     'dress_size_id' => $reservation['dress_size_id'],
        //     'price' => $reservation['price'],
        //     'from' => $reservation['from'],
        //     'to' => $reservation['to'],
        //     // 'state' => isset($reservation['state'])?$reservation['state']:'Pending',
        // ]);
        return $reservation_object->save();
    }
}
