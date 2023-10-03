<?php

use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    dd(auth()->user()->id);
    return Inertia::render('Dashboard');
});

Route::get('/registration', [AuthController::class, 'register']);
Route::post('/registration', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authUser']);

// Route::middleware('auth')->group( function() {
//     Route::resource('/boards', BoardController::class);

//     Route::resource('/tasks', TaskController::class);
// });
