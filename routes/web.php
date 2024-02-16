<?php

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

Route::get('/', [HomeController::class, 'index'] );
Route::get('/a-propos', function(){
    return view('about');
});
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
