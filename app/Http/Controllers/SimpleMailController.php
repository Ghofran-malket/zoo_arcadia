<?php

namespace App\Http\Controllers;

use App\Mail\SimpleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SimpleMailController extends Controller
{
    public function index() {

        $emailDataArray = array(
            'appointment_id' => 'id',
            'patient_name' => 'name',
        );

        Mail::to('test@mail.dev')->send(new Simplemail(['id' => '1122']));
        
        


        return 'Mail Sent';
    }
}
