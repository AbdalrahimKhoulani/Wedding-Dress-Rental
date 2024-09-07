<?php

namespace App\Http\Controllers;

use App\Services\DressService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $dress_service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DressService $dress_service)
    {
        $this->dress_service = $dress_service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_dresses = $this->dress_service->getLatestDresses(6);
        return view('home')->with('latest_dresses',$latest_dresses);
    }
}
