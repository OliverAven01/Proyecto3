<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/pollos', function () {
    $pollos = [
        ['id' => 1, 'nombre' => 'Pollo 1', 'raza' => 'Raza 1', 'peso' => 2.5],
        ['id' => 2, 'nombre' => 'Pollo 2', 'raza' => 'Raza 2', 'peso' => 3.0],
        ['id' => 3, 'nombre' => 'Pollo 3', 'raza' => 'Raza 1', 'peso' => 2.8],
    ];

    return view('pollos.index', compact('pollos'));
})->name('pollos.index');
Route::get('/pollos/show', function () {
    $pollo = [
        'id' => 1,
        'nombre' => 'Pollo 1',
        'raza' => 'Raza 1',
        'peso' => 2.5,
    ];

    return view('pollos.show', compact('pollo'));
})->name('pollos.show');
Route::get('/pollos/edit', function () {
    $pollo = [
        'id' => 1,
        'nombre' => 'Pollo 1',
        'raza' => 'Raza 1',
        'peso' => 2.5,
    ];

    return view('pollos.edit', compact('pollo'));
})->name('pollos.edit');
Route::get('/pollos/create', function () {
    return view('pollos.create');
})->name('pollos.create');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
