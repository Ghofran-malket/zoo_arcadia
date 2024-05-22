<?php

namespace App\Http\Controllers;

use App\Models\AvisDeVisiteur;
use Illuminate\Http\Request;

class AvisDeVisiteurController extends Controller
{
    public static function index() {
        $avis_de_visiteurs = AvisDeVisiteur::limit(2)->get();
        return $avis_de_visiteurs;
    }
}
