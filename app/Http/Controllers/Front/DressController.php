<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\DressService;
use Illuminate\Http\Request;

class DressController extends Controller
{
    private $dress_service;
    public function __construct(DressService $dress_service)
    {
        $this->dress_service = $dress_service;
    }
    public function index()
    {
        $dresses = $this->dress_service->getDresses();
        return view('front.dress.index')->with('dresses', $dresses);
    }

    public function show($id)
    {
        $dress = $this->dress_service->getDressById($id);
        return view('front.dress.show')->with('dress',$dress);
    }
}
