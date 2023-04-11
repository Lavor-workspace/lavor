<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(routingController::class)->group(function (){
    Route::get('{category}/{route}', 'complex');
    Route::get('{category}/{route}/{component}', 'complex');
});
