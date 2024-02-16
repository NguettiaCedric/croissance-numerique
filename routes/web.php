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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/demande-demo', [HomeController::class, 'demandeDemo'])->name('demande-demo');


Route::get('/a-propos', function(){
    return view('about');
});

/* Route::get('/', function () {
    return view('welcome');
}); */
