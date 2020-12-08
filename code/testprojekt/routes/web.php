<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


Route::get('/question', function (Request $request) {

    if (!$request->filled('id')) {
        return response('Ein Fehler ist aufgetreten, da keine id übergeben wurde', Response::HTTP_NOT_FOUND);
    } elseif ($request->file === 'true' && $request->filled(['id', 'question'])) {
        $id = $request->id;
        $newname = $id . '.png';

        return response()->download('assets/image/Success.png', $newname);
    } elseif ($request->has('id') && !$request->filled('question')) {

        return redirect()->away('https://webmasters-fernakademie.de');
    } elseif ($request->filled(['id', 'question']) && $request->file !== 'true') {
        return 'Ihre Frage wurde erfolgreich gespeichert';
    };


});

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

Route::get('/zeigeTeilnehmer', [App\Http\Controllers\CertificateController::class, 'namelist'])->name('Teilnehmer');

Route::get('/zeigeTelefonnummer', [App\Http\Controllers\CertificateController::class, 'phonelist'])->name('Telefon');

Route::get('/zeigeTemplate', [App\Http\Controllers\CertificateController::class, 'template']);


use App\Http\Controllers\CertificateController; 
Route::resource('certificates', CertificateController::class)->only(
    [ 'create', 'store', 'show', 'destroy']
    )->names (
        ['create' => 'certificates.certify']
    );

Route::get('/posts', [App\Http\Controllers\InterestController::class, 'showPosts']);
Route::get('/posts/count', [App\Http\Controllers\InterestController::class, 'countPosts']);
Route::get('/posts/create/{title}/{text}/{interest_id}', [App\Http\Controllers\InterestController::class, 'createPost']);
Route::get('/posts/update6to10', [App\Http\Controllers\InterestController::class, 'updatePost6to10']);
Route::get('/posts/desc', [App\Http\Controllers\InterestController::class, 'showPostsDescending']);
Route::get('/posts/deleteNull', [App\Http\Controllers\InterestController::class, 'deleteNullPosts']);

Route::get('/interests', [App\Http\Controllers\InterestController::class, 'index']);
Route::get('/interests/create/{id}/{text}', [App\Http\Controllers\InterestController::class, 'create']);
Route::get('/interests/delete/{id}', [App\Http\Controllers\InterestController::class, 'delete']);
Route::get('/interests/fullfillData', [App\Http\Controllers\InterestController::class, 'fullfillData']);

Route::get('/articles/{id?}', [App\Http\Controllers\Articles_InterestsController::class, 'show']);
Route::get('/articles/onlyTrash', [App\Http\Controllers\Articles_InterestsController::class, 'showOnlyTrash']);
Route::get('/articles/withTrash', [App\Http\Controllers\Articles_InterestsController::class, 'showWithTrash']);
// Route::get('/articles/create/{title}/{text}/{interest_id}', [App\Http\Controllers\Articles_InterestsController::class, 'create']);
Route::get('/articles/destroy/{id}', [App\Http\Controllers\Articles_InterestsController::class, 'destroy']);
// Route::get('/articles/update/{id}/{title}/{text}/{interest_id}', [App\Http\Controllers\Articles_InterestsController::class, 'update']);

Route::get('/article/create', [App\Http\Controllers\Articles_InterestsController::class, 'create']);
Route::get('/article/update/{id}', [App\Http\Controllers\Articles_InterestsController::class, 'showUpdate']);
Route::post('/article/store', [App\Http\Controllers\Articles_InterestsController::class, 'store']);
Route::put('/article/storeUpdate', [App\Http\Controllers\Articles_InterestsController::class, 'storeUpdate']);


Route::redirect('/posts/create/{title}', '/posts/create/{title?}/null/null');
Route::redirect('/posts/create/{title}/{text}', '/posts/create/{title?}/{text}/null');