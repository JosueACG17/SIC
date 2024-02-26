<?php

// use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});

Route::post('/home', [StudentController::class, 'store']);

Route::get('/docentes', function () {
    return view('docentes', ['name' => 'Josue']);
});

Route::get('/tabla', function () {
    return view('tablausuarios');
});

/*
Route::get('/alumnos', [StudentController::class, 'index']);
Route::post('/alumnos', [StudentController::class, 'store']);
*/


Route::resource('estudiantes', StudentController::class);

Route::resource('tabla', StudentController::class);
