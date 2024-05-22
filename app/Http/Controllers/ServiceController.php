<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $sliders = SliderController::index()->where('page', '=', 'services');
        $services = Service::all();
        return view('services',compact('sliders', 'services'));
    }
    
    public static function one_service() {
        $services = Service::first();
        return $services;
    }
}
