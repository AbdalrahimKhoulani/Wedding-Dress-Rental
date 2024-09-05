<?php

namespace App\Services;

use App\Models\Dress;
use Illuminate\Support\Facades\Storage;

class DressService
{
    public function getDresses($active = true, $page = 1, $nb_products = 20)
    {
        $dresses = Dress::all();
        foreach ($dresses as $key => $dress) {
            $dresses[$key]['image'] = asset("assets/images/dress/$dress->id.jpg");
        }
        return $dresses;
    }

    public function getDressById($id)
    {
        $dress = Dress::with(['sizes', 'images'])->find($id);
        $dress['image'] = asset("assets/images/dress/$dress->id.jpg");

        return $dress;
    }
}
