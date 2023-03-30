<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;

use App\Http\Controllers\RapportController;
use App\Http\Controllers\MedicamentController;

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
    return view('home');
});

Route::get('/getlogin', [VisiteurController::class, 'getLogin']);

Route::post('/login', [VisiteurController::class, 'signIn']);

Route::get('/getLogout', [VisiteurController::class, 'signOut']);

Route::get('/RapportMedicament', [RapportController::class,'RapportMedicament']);

Route::get('/listeMedicament', [MedicamentController::class,'listeMedicament']);

Route::post('postRapport', [RapportController::class, 'postAjouterRapport']);
Route::get('/ajoutRapport', function(){
    return view('vues/formRapportAjouter');
});

Route::get('/listerRapport', [RapportController::class,'listerRapport']);

Route::get('/modifierRapport/{id}', [RapportController::class, 'modifierRapport']);

Route::post('postmodifierRapport',[RapportController::class, 'postmodifierRapport']);

Route::get('/rechercherRapport', [RapportController::class,'rechercherRapport']);

Route::post('/unRapport',     array(
        'uses'=> 'App\Http\Controllers\RapportController@afficherUnRapport',
        'as'=> 'unRapport',
    )

);
