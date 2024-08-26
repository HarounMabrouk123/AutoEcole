<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Cars(){
        $cars = Car::get() ;
        return Inertia::render('OurCars',['cars' => $cars]) ;
    }

    public function Trainers(){
        $trainers = Trainer::get() ;
        return Inertia::render('OurTrainers',['trainers' => $trainers]) ;
        
    }


}
