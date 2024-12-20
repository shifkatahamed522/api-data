<?php

use App\Http\Controllers\MyController;
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

//Route::get('/myapi', [MyController::class, 'index'])->name('myapi.index');;
//Route::post('/myapi/create', [MyController::class, 'create'])->name('myapi.create');


Route::get("/myapi", [MyController::class, 'index']);

// Create new data
Route::post('/myapi', [MyController::class, 'store']);

// Delete a data entry by ID
Route::delete('/myapi/{id}', [MyController::class, 'destroy']);

//For update
Route::put('/myapi/{id}', [MyController::class, 'update']);





 