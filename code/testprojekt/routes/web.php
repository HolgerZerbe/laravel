<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');    
});

Route::get('/helloworld', function () {
    return 'Hallo Welt, wie geht es dir?';    
});

Route::get('/helloworldagain', function () {
    return 'Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir? <br>Hallo Welt, wie geht es dir?';    
});

// Route::get('/user/{id?}', function ($id = null) {
//     return '<h1>Der User hat folgende Id: <span style="color: red;">' . $id . '<br><span style="color: grey;"> Vielen Dank! </h1>';    
// });

// Route::get('/nachname/{nachname}/name/{name}', function ($nachname = 'Kein Nachname vorhanden', $vorname = 'Kein Vorname vorhanden') {
//     return 'Der Nutzer heißt ' . $vorname . ' ' . $nachname;
// });

Route::redirect('/', '/helloworldagain');

Route::get('/allProducts/{id}', function ($id = null) {
    return "Das Produkt hat die Id " . $id;
})->name("singleProduct");


// ACHTUNG: Seit Laravel 8 sind nur noch absolute Pfade erlaubt,
// die bis Laravel 7 gültige Angabe von relativen Pfaden wie 

// Route::get('/hellowordController', 'TestController@printMessage')

// ist nicht mehr zulässig

// siehe auch https://laracasts.com/discuss/channels/code-review/illuminatecontractscontainerbindingresolutionexception-target-class-usercontroller-does-not-exist?signup

// Hier die Lösung:

// use App\Http\Controllers\TestController;
// Route::get('/helloworldController', [TestController::class, 'printMessage']);


// oder alternativ verkürzt:

Route::get('/helloworldController', [App\Http\Controllers\TestController::class, 'printMessage']);

Route::get('/user/{id?}', [App\Http\Controllers\TestController::class, 'printUserId']);

Route::get('/nachname/{nachname}/name/{name}', [App\Http\Controllers\TestController::class, 'printGanzerName']);

use App\Http\Controllers\CertificateController; 
Route::resource('certificates', CertificateController::class)->only(
    [ 'create', 'store', 'show', 'destroy']
    )->names (
        ['create' => 'certificates.certify']
    );