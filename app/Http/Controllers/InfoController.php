<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class InfoController extends Controller
{


    public function index() {

        $date = Carbon::today();
        $today =  $date->format('F j, Y');

        return view('index', ['today' => $today]);
    }

    public function about() {

        return view('about');
    }

    public function contact() {

        return view('contact');
    }

}
