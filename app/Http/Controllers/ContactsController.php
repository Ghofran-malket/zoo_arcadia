<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $sliders = SliderController::index()->where('page', '=', 'contacts');

        return view('contact',compact('sliders'));
    }
}