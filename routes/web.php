<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/formulario', function () {
    return view('formulario');
}) -> middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::post('/students', [StudentController::class, 'store'])->middleware('auth');
Route::resource('students', StudentController::class);


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/registro', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.register');
});

Route::get('/error', function () {
    return view('error');
})->name('error');


Route::resource('tablausuarios', StudentController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return redirect()->route('error');
})->name('fallback');

require __DIR__.'/auth.php';
