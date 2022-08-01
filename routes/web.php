<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PetController,
    OwnerController,
    UserController,
    VaccineController
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
Route::controller(VaccineController::class)->group(function(){
    Route::get('/vaccines/create', "create")->name("vaccines.create");
    Route::post('/vaccines', "store")->name("vaccines.store");
    Route::get('/vaccines/{id}/edit', "edit")->name("vaccines.edit");
    Route::put('/vaccines', "update")->name("vaccines.update");
    Route::get('/vaccines', "index")->name("vaccines.index");
    // Route::get('/owners/{id}/pets', "show")->name("vaccines.show");
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');