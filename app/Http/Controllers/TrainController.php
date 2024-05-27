<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        //recuperare i treni in partenza oggi
        $trains = Train::whereDate('departure_time', today())->get();

        //ritornare la vista welcome passando i treni

        return view('welcome', compact('trains'));
    }
}
