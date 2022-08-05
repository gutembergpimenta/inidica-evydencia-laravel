<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::middleware('guest')->group( function(){
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/home', [MainController::class, 'index']);
    Route::put('/home', [MainController::class, 'confirmed_indication']);


});


Route::prefix('admin')->middleware('auth')->group( function(){

});

