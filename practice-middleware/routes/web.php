<?php

use App\Http\Controllers\StudentController;
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

Route::prefix('users')->group(function (){

    Route::get('/', [StudentController::class, 'index']);

    Route::get('/detail/{id}', [StudentController::class, 'showDetail'])->name('users.showDetail');

    Route::get('/register', [StudentController::class, 'showFormRegister'])->name('users.showFormRegister');

});

Route::middleware(['checkRegister', 'checkEmail'])->group(function (){

    Route::post('/register', [StudentController::class, 'register'])->name('users.register');

});

