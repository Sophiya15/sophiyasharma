<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisterController;
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
//     return view('form');
// });



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('forget');
// });


Route::get('/', function () {
       return view('register');
     });


Route::get('/register',[RegisterController::class,'index']);
Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');


Route::get('/form', [FormController::class,'index']);
Route::post('/form/store',[FormController::class,'store'])->name('form.store');
