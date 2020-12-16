<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


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
Route::get('/', function () {
    Log::channel('daily')->info(request()->ip());
    return view('welcome');    
});
Route::get('/advanced', [App\Http\Controllers\AdvancedController::class, 'show']);



Route::post('/', function () {
    return 'POST SUCCESS';
})->middleware('easteregg');


Route::get('/onion', function() {
    echo ' core '; 
})->middleware('after.layer', 'before.layer');


// Zum Testen ohne Postman unteren Post-Request auf Get-Request umgeschrieben.
// Route::get('/testingmiddleware/{easteregg}', function () {
//     return 'Get Request successfull';
// })->middleware('easteregg');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
