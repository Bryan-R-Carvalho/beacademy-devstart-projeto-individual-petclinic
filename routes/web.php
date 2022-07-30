<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PetController,
    OwnerController,
    UserController
};

Route::get('/', function () {
    return view('home');
});

Route::controller(OwnerController::class)->group(function(){
    Route::post('/owners', "store")->name("owners.store");
    Route::get('/owners', "index")->name("owners.index");
    Route::get('/owners/create', "create")->name("owners.create");
    
    Route::get('/owners/{id}/pets', 'show')->name('owners.show');
});

//Route::get('/owners/{id}/pets', [PetController::class, 'show'])->name('owners.show');
Route::get('/users', [UserController::class, 'index'])->name('users.index');