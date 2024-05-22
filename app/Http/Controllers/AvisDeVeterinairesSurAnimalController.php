<?php

namespace App\Http\Controllers;

use App\Models\AvisDeVeterinairesSurAnimal;
use Illuminate\Http\Request;

class AvisDeVeterinairesSurAnimalController extends Controller
{
    public static function index(Request $request) {
        $avis = AvisDeVeterinairesSurAnimal::where('animal_id','=',$request->animalId)->get();
        return $avis;
    }

}
