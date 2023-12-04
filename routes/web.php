<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;// ricordarsi di dichiarare il controller
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

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

// Route::get('/home', function () {
    
//     return view('welcome');
// });

// Route::get('/register', [RegisterController::class, 'create']);
// Route::post('/register',[RegisterController::class,'store']);
// Route::get('/logout',[LogoutController::class,'destroy'])->middleware('auth'); //in questo modo solo gli utenti autenticati possono accedere a questo percorso
// Route::get('/login', [LoginController::class, 'create']);
// Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/login', Login::class);