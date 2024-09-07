<?php

namespace App\Services;

use App\Models\Dress;
use App\Models\DressImage;
use Illuminate\Support\Facades\Storage;

class DressService
{
    public function getDresses($active = true, $page = 1, $nb_products = 20)
    {
        $dresses = Dress::where('active', '=', '1')->whereHas('sizes', function ($query) {
            $query->whereActive('1');
        })->paginate(12);

        // dd($dresses);
        foreach ($dresses as $key => $dress) {
            $image_id = DressImage::where('dress_id', '=', $dress->id)->where('cover', '=', '1')->first()->id;
            $dresses[$key]['image'] = asset("assets/images/dress/$image_id.jpg");
        }
        return $dresses;
    }

    public function getDressById($id)
    {
        $dress = Dress::with([
            'sizes' => function ($query) {
                $query->wherePivot('active', '=', '1');
            },
            'images'
        ])
            ->whereHas('sizes', function ($query) {
                $query->whereActive('1');
            })
            ->where('active', '=', '1')
            ->find($id);
        if ($dress) {
            $image_id = DressImage::where('dress_id', '=', $dress->id)->where('cover', '=', '1')->first()->id;
            $dress['image'] = asset("assets/images/dress/$image_id.jpg");
        }

        return $dress;
    }

    public function getLatestDresses($limit)
    {
        $dresses = Dress::latest()
            ->whereHas('sizes', function ($query) {
                $query->whereActive('1');
            })
            ->take($limit)
            ->where('active', '=', '1')
            ->get();

        foreach ($dresses as $key => $dress) {
            $image_id = DressImage::where('dress_id', '=', $dress->id)->where('cover', '=', '1')->first()->id;
            $dresses[$key]['image'] = asset("assets/images/dress/$image_id.jpg");
        }
        return $dresses;
    }

    public function getDressForReservation($dress_id)
    {
        $dress = Dress::with(['sizes','images'])
            ->find($dress_id);
        if ($dress) {
            $image_id = DressImage::where('dress_id', '=', $dress->id)->where('cover', '=', '1')->first()->id;
            $dress['image'] = asset("assets/images/dress/$image_id.jpg");
        }

        return $dress;
    }
}
