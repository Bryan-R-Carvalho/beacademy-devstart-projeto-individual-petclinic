<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    OwnerController,
    VaccineController,
    PetController,
    VaccinePetController
  };

Route::get('/', function () {
    return view('home');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/owners/create', [OwnerController::class, "create"])->name("owners.create");
    Route::post('/owners', [OwnerController::class, "store"])->name("owners.store");
    Route::get('/owners/{id}/edit', [OwnerController::class, "edit"])->name("owners.edit");
    Route::put('/owners/{id}', [OwnerController::class, "update"])->name("owners.update");
    Route::get('/owners', [OwnerController::class, "index"])->name("owners.index");
    Route::get('/owners/{id}', [OwnerController::class, "show"])->name("owners.show");

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::get('/owners/{id}/pets/create', [PetController::class, "create"])->name("pets.create");
    Route::post('/owners/{id}/pets', [PetController::class, "store"])->name("pets.store");
    Route::get('/owners/{id}/pets/edit', [PetController::class, "edit"])->name("pets.edit");
    Route::put('/owners/{id}/pets', [PetController::class, "update"])->name("pets.update");
    Route::get('/owners/{id}/pets', [PetController::class, "show"])->name("pets.show");

    Route::get('/vaxpet/create', [VaccinePetController::class, "create"])->name("vaccinepet.create");
    Route::post('/vaxpet', [VaccinePetController::class, "store"])->name("vaccinepet.store");
    Route::get('/vaxpet/{id}/edit', [VaccinePetController::class, "edit"])->name("vaccinepet.edit");
    Route::put('/vaxpet', [VaccinePetController::class, "update"])->name("vaccinepet.update");
    Route::get('/vaxpet', [VaccinePetController::class, "index"])->name("vaccinepet.index");
    Route::get('/vaxpet/{id}', [VaccinePetController::class, "show"])->name("vaccinepet.show");

    Route::get('/vaccines/create', [VaccineController::class, "create"])->name("vaccines.create");
    Route::post('/vaccines', [VaccineController::class, "store"])->name("vaccines.store");
    Route::get('/vaccines/{id}/edit', [VaccineController::class, "edit"])->name("vaccines.edit");
    Route::put('/vaccines', [VaccineController::class, "update"])->name("vaccines.update");
    Route::get('/vaccines', [VaccineController::class, "index"])->name("vaccines.index");

   

});

require __DIR__.'/auth.php';