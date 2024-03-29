<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\StaticController;
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
}); 
Route::post('/blabla/{id}',[ourClass::class,'destroy']->name(index.destroy))
*/

Route::resource("ideas", IdeasController::class);

Route::get('/',[StaticController::class,"index"]);