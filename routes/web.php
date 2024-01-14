<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeasController;
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

/* Route::get('/dashboard', [DashboardController::class, "index"]); */
/* Route::get("/terms", function () {
    return view("terms");
}); */

Route::resource("ideas", IdeasController::class);