<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MoziController;
use App\Http\Controllers\HelyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DiagramController;

//Főoldal
Route::get('/', function () {
    return view('welcome');
})->name('home');

//Dashboard (Laravel Breeze default)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Profil (Laravel Breeze default)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Adatbázis menü (három tábla)
Route::get('/mozik', [MoziController::class, 'index'])->name('mozik');
Route::get('/filmek', [FilmController::class, 'index'])->name('filmek');
Route::get('/helyek', [HelyController::class, 'index'])->name('helyek');

//Kapcsolat (űrlap)
Route::get('/kapcsolat', [MessageController::class, 'create'])->name('kapcsolat');
Route::post('/kapcsolat', [MessageController::class, 'store'])->name('kapcsolat.store');

//Üzenetek megtekintése (csak bejelentkezve)
Route::middleware(['auth'])->group(function () {
    Route::get('/uzenetek', [MessageController::class, 'index'])->name('uzenetek');
});

//Diagram oldal (Chart.js)
Route::get('/diagram', [DiagramController::class, 'index'])->name('diagram');

//CRUD (pl. Filmek kezelése)
Route::middleware(['auth'])->group(function () {
    Route::resource('/crud/filmek', FilmController::class);
});

//Admin oldal (csak adminnak)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Nincs jogosultságod az admin oldalhoz.');
        }
        return view('admin.index');
    })->name('admin');
});
