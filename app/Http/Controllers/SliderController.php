<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public static function index() {
        $sliders = Slider::all();
        return $sliders;
    }
}
