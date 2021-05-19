<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travelpack;

class TravelpackController extends Controller
{
    public function index(){
        $pack = Travelpack::all();
        return view('pack', compact('pack'));
    }
}
