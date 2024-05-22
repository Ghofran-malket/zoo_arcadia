<?php


use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HabitatsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimpleMailController;
use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Spatie\Permission\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/services', [ServiceController::class,'index'])->name('services');//->middleware('is_admin');
Route::get('/habitats', [HabitatsController::class,'index'])->name('habitats');
//Route::get('/connection', [ConnectionController::class,'index'])->name('connection');
Route::get('/contacts', [ContactsController::class,'index'])->name('contacts');
Route::get('/habitats/{id}', [HabitatsController::class,'habitats_details'])->name('habitats.details');
Route::get('/habitats/{id}/{animalId}', [AnimalController::class,'animal_details'])->name('animal.details');


Route::get('/login', [AuthController::class,'login'])->name('auth.login');//middleware('is_admin');
Route::delete('/logout', [AuthController::class,'logout'])->name('auth.logout');//->name('auth.login');

Route::post('/login', [AuthController::class,'doLogin']);//->middleware('is_admin');

Route::get('/register', [AuthController::class,'register'])->name('auth.register');//->middleware('is_admin');
Route::post('/register', [AuthController::class,'doRegister']);//->middleware('is_admin');;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/pages', function(){
    return view('pages');
});
Route::get('/create_bill', function(){
    return view('create_bill');
});


Route::get('sendmail', [SimpleMailController::class, 'index']);

Route::get('/testroute', function() {
    $name = "Funny Coder";
    Mail::to('testreceiver@gmail.com')->send(new ContactMail($name));
});
