<?php

use App\Http\Controllers\EtudiantController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[EtudiantController::class, 'liste'])->name('etudiant.liste');
Route::get('/etudiant/ajout',[EtudiantController::class, 'ajoutForm'])->name('etudiant.ajout');
Route::post('/etudiant/ajout',[EtudiantController::class, 'add'])->name('etudiant.add');
Route::get('/etudiant/modifier/{id}',[EtudiantController::class, 'showModif'])->name('etudiant.modifier');
Route::post('/etudiant/update',[EtudiantController::class, 'update'])->name('etudiant.update');
