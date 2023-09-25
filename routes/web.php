<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Device_dataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'dashboard');
Route::view('/sensor', 'sensor');
Route::view('/about', 'about');
Route::view('/temperature-chilled-water', 'sensor.temperature.chilled-water');
Route::view('/temperature-cooling-water', 'sensor.temperature.cooling-water');
Route::view('/condenser-pressure', 'sensor.pressure.condenser');
Route::view('/evaporator-pressure', 'sensor.pressure.evaporator');
Route::view('/main-motor-current', 'main-motor-current');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::get('/device', [Device_dataController::class, 'show']);