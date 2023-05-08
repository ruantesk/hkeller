<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\CaoController;
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
Route::get('/tutores', [TutorController::class, 'index'])->name('tutor.index');
Route::get('/tutores/create', [TutorController::class, 'create'])->name('tutor.create');
Route::post('/tutores', [TutorController::class, 'store'])->name('tutor.store');
Route::get('/tutores/{id}', [TutorController::class, 'show'])->name('tutor.show');
Route::get('/tutores/{id}/edit', [TutorController::class, 'edit'])->name('tutor.edit');
Route::patch('/tutores/{id}', [TutorController::class, 'update'])->name('tutor.update');
Route::delete('/tutores/{id}', [TutorController::class, 'destroy'])->name('tutor.destroy');

// Cães
// Route::resource('cao', 'CaoController');
Route::get('/caes', [CaoController::class, 'index'])->name('cao.index');
Route::get('/caes/create', [CaoController::class, 'create'])->name('cao.create');
Route::post('/caes', [CaoController::class, 'store'])->name('cao.store');
Route::get('/caes/{id}', [CaoController::class, 'show'])->name('cao.show');
Route::get('/caes/{id}/edit', [CaoController::class, 'edit'])->name('cao.edit');
Route::patch('/caes/{id}', [CaoController::class, 'update'])->name('cao.update');
Route::delete('/caes/{id}', [CaoController::class, 'destroy'])->name('cao.destroy');

require __DIR__.'/auth.php';
