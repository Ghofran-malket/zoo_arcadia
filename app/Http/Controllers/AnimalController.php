<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use App\Models\AvisDeVeterinairesSurAnimal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public static function index() {
        $animals = Animal::limit(6)->get();
        return $animals;
    }

    public function animal_details(Request $request) {
        $animal = Animal::whereId($request->animalId)->firstOrFail();
        $habitat = Habitat::whereId($request->id)->firstOrFail();
        
        $avis_de_veterinaire = AvisDeVeterinairesSurAnimal::where('animal_id', '=', $request->animalId)->firstOrFail();
        return view('animal-details',compact( 'animal', 'habitat','avis_de_veterinaire'));
        //return dd($avis_de_veterinaire);
    }
}