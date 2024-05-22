<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $habitats = HabitatsController::habitats_section();
        $services = ServiceController::one_service();
        $animals = AnimalController::index();
        $avis_de_visiteurs = AvisDeVisiteurController::index();
        $sliders = SliderController::index()->where('page', '=', 'home');

        return view('index', compact('habitats','services', 'animals', 'avis_de_visiteurs','sliders'));
    }
}
