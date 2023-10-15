<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Device_dataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogSheetController;

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

Route::get('/', [LogSheetController::class, 'show']);
Route::view('/sensor', 'sensor', ['title' => 'Sensor']);
Route::view('/about', 'about', ['title' => 'About']);
Route::view('/login', 'auth.login', ['title' => 'Login']);
Route::view('/register', 'auth.register', ['title' => 'Register']);
Route::view('/device', 'device', ['title' => 'Device']);
Route::view('/profile', 'profile', ['title' => 'Profile']);
Route::view('/admin', 'admin', ['title' => 'Admin']);
Route::view('/test', 'test', ['title' => 'Test']);


//sensor
Route::view('/temperature-chilled-water', 'sensor.chilled-water', ['title' => 'Temperature Chilled Water']);
Route::view('/temperature-cooling-water', 'sensor.cooling-water', ['title' => 'Temperature Cooling Water']);
Route::view('/condenser-pressure', 'sensor.condenser', ['title' => 'Condenser Pressure']);
Route::view('/evaporator-pressure', 'sensor.evaporator', ['title' => 'Evaporator Pressure']);
Route::view('/oil-tank', 'sensor.oil-tank', ['title' => 'Oil Tank']);
Route::view('/oil-capacity', 'sensor.oil-capacity', ['title' => 'Oil Capacity']);
Route::view('/oil-pressure', 'sensor.oil-pressure', ['title' => 'Oil Pressure']);
Route::view('/vane-position', 'sensor.vane-position', ['title' => 'Vane Position']);
Route::view('/main-motor-current', 'sensor.main-motor-current', ['title' => 'Main Motor Current']);
// Route::get('/device', [Device_dataController::class, 'show']);


// auth -> register bersifat sementara
Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/sign-up', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);