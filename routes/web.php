<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorController;
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

// Tutores
Route::get('/tutores', [TutorController::class, 'index']);
Route::get('/tutores/create', [TutorController::class, 'create']);
Route::post('/tutores', [TutorController::class, 'store']);
Route::get('/tutores/{id}', [TutorController::class, 'show']);
Route::get('/tutores/{id}/edit', [TutorController::class, 'edit']);
Route::put('/tutores/{id}', [TutorController::class, 'update']);
Route::delete('/tutores/{id}', [TutorController::class, 'destroy']);


require __DIR__.'/auth.php';
