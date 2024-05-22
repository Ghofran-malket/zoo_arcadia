<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use Illuminate\Http\Request;

class HabitatsController extends Controller
{
    public function index() {
        $sliders = SliderController::index()->where('page', '=', 'habitats');
        $habitats = Habitat::all();
        return view('habitats',compact('sliders', 'habitats'));
    }

    public static function habitats_section() {
        $habitats = Habitat::limit(3)->get();
        return $habitats;
    }

    public function habitats_details(Request $request) {
        $sliders = SliderController::index()->where('page', '=', 'habitats');
        $habitat = Habitat::whereId($request->id)->firstOrFail();
        $animals = Animal::get()->where('habitats_id', '=', $request->id);
        return view('habitats-details',compact('sliders', 'habitat', 'animals'));
    }

}

