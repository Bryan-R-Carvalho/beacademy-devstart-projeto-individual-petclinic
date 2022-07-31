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
    Route::get('/owners/create', "create")->name("owners.create");
    Route::post('/owners', "store")->name("owners.store");
    Route::get('/owners/{id}/edit', "edit")->name("owners.edit");
    Route::put('/owners/{id}', "update")->name("owners.update");
    Route::get('/owners', "index")->name("owners.index");
    Route::get('/owners/{id}', "show")->name("owners.show");
    
});
Route::controller(PetController::class)->group(function(){
    Route::get('/owners/{id}/pets/create', "create")->name("pets.create");
    Route::post('/owners/{id}/pets', "store")->name("pets.store");
    Route::get('/owners/{id}/pets/edit', "edit")->name("pets.edit");
    Route::put('/owners/{id}/pets', "update")->name("pets.update");
    Route::get('/owners/{id}/pets', "show")->name("pets.show");
});
Route::get('/users', [UserController::class, 'index'])->name('users.index');