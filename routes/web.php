<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', [MainController::class, 'index'])->name('home');
Route::post('/inicio', [MainController::class, 'confirmed_indication'])->name('home.action');

Route::middleware('guest')->group( function(){
    Route::get('/admin',[AdminController::class, 'index'])->name('admin');
    Route::post('/admin',[AdminController::class, 'authenticate'])->name('admin.auth');
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group( function(){
    Route::get('/home', [AdminController::class, 'main'])->name('index');

    Route::get('/adicionar_audio', [AdminController::class, 'createAudio'])->name('create.audio');
    Route::post('/adicionar_audio', [AdminController::class, 'storeAudio'])->name('store.audio');

    Route::get('/adicionar_imagem',[AdminController::class, 'createImage'])->name('create.image');
    Route::post('/adicionar_imagem',[AdminController::class, 'storeImage'])->name('store.image');

    Route::get('/adicionar_texto', [AdminController::class, 'createText'])->name('create.text');
    Route::post('/adicionar_texto', [AdminController::class, 'storeText'])->name('store.text');

    Route::get('/adicionar_video', [AdminController::class, 'createVideo'])->name('create.video');
    Route::post('/adicionar_video', [AdminController::class, 'storeVideo'])->name('store.video');
});

