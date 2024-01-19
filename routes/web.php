<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CustomerController;
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
    Return view('welcome');
    // return inertia::render('create');
});


Route::get('customers',[CustomerController::class,'index'])->name('customers.index');
Route::get('customers/create',[CustomerController::class,'create'])->name('customers.create');
// Route::post('customers/store',[CustomerController::class,'store'])->name('customers.store');
Route::post('customers/store',[CustomerController::class,'store']);