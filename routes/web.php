<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/store-contact', [HomeController::class, 'store_contact']);

Route::get('/demande-demo', [HomeController::class, 'demandeDemo'])->name('demande-demo');
Route::post('/store-demande-demo', [HomeController::class, 'store_demandeDemo']);

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/liste-projet', [AdminController::class, 'projet'])->name('liste-projet');
Route::get('/ajout-projet', [AdminController::class, 'projets'])->name('ajout-projet');
Route::post('/store-projet', [AdminController::class, 'store_projets'])->name('store-projet');
Route::get('/activer-projet/{id}', [AdminController::class, 'activer_projet']);
Route::get('/desactiver-projet/{id}', [AdminController::class, 'desactiver_projet']);
Route::get('/edit-projet/{id}', [AdminController::class, 'edit_projet']);
Route::post('/update-projet/{id}', [AdminController::class, 'update_projet']);
Route::get('/delete-projet/{id}', [AdminController::class, 'delete_projet']);
Route::get('/projet/{id}', [AdminController::class, 'show_projet'])->name('projet.show');



Route::get('/a-propos', function(){
    return view('about');
})->name('a-propos');
Route::get('solutions/sap-business-one', function(){
    return view('solutions.sap');
})->name('sap');

Route::get('solutions/sap-rsm', function(){
    return view('solutions.rsm');
})->name('rsm');

Route::get('services/integration-de-solution', function(){
    return view('services.integration');
})->name('integration');

Route::get('services/developpement-web', function(){
    return view('services.developpement');
})->name('developpement');

Route::get('services/accompagnement-digital', function(){
    return view('services.accompagnement');
})->name('accompagnement');
/* Route::get('/', function () {
    return view('welcome');
}); */
