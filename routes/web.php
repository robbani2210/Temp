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

Route::get('/', [LogSheetController::class, 'show'])->middleware('auth');
Route::view('/sensor', 'sensor', ['title' => 'Sensor'])->middleware('auth');
Route::view('/about', 'about', ['title' => 'About'])->middleware('auth');
Route::view('/login', 'auth.login', ['title' => 'Login'])->middleware('auth');
Route::view('/register', 'auth.register', ['title' => 'Register'])->middleware('auth');
Route::view('/device', 'device', ['title' => 'Device'])->middleware('auth');
Route::view('/profile', 'profile', ['title' => 'Profile'])->middleware('auth');
Route::view('/admin', 'admin', ['title' => 'Admin'])->middleware('auth');
Route::view('/test', 'test', ['title' => 'Test'])->middleware('auth');


//sensor
Route::view('/temperature-chilled-water', 'sensor.chilled-water', ['title' => 'Temperature Chilled Water'])->middleware('auth');
Route::view('/temperature-cooling-water', 'sensor.cooling-water', ['title' => 'Temperature Cooling Water'])->middleware('auth');
Route::view('/condenser-pressure', 'sensor.condenser', ['title' => 'Condenser Pressure'])->middleware('auth');
Route::view('/evaporator-pressure', 'sensor.evaporator', ['title' => 'Evaporator Pressure'])->middleware('auth');
Route::view('/oil-tank', 'sensor.oil-tank', ['title' => 'Oil Tank'])->middleware('auth');
Route::view('/oil-capacity', 'sensor.oil-capacity', ['title' => 'Oil Capacity'])->middleware('auth');
Route::view('/oil-pressure', 'sensor.oil-pressure', ['title' => 'Oil Pressure'])->middleware('auth');
Route::view('/vane-position', 'sensor.vane-position', ['title' => 'Vane Position'])->middleware('auth');
Route::view('/main-motor-current', 'sensor.main-motor-current', ['title' => 'Main Motor Current'])->middleware('auth');
// Route::get('/device', [Device_dataController::class, 'show']);


// auth -> register bersifat sementara
Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/sign-up', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [RegisterController::class, 'store']);