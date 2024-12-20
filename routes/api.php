<?php

use App\Http\Controllers\MyController;
use App\Models\ApiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Get all records from the 'api_data' table

Route::get("/myapi", [MyController::class, 'index']);
//Route::get("/myapi/create", [MyController::class, 'create'])->name('myapi.create');
//Route::post('/myapi', [MyController::class, 'store'])->name('myapi.store');

// Create new data
Route::post('/myapi', [MyController::class, 'store']);

// Delete a data entry by ID
Route::delete('/myapi/{id}', [MyController::class, 'destroy']);

//For update
Route::get('getsingle/myapi/{id}', [MyController::class, 'getproducts']);
Route::put('/myapi/{id}', [MyController::class, 'update']);





//Route::get('/myapi/{id}', [MyController::class, 'show'])->name('myapi.show');
//Route::get('/myapi/{id}/edit', [MyController::class, 'edit'])->name('myapi.edit');
//Route::PUT('/myapi/{id}', [MyController::class, 'update'])->name('myapi.update');
//Route::delete('/myapi/{id}', [MyController::class, 'destroy'])->name('myapi.destroy');


// // Get a single record by ID
// Route::get('/myapi/{id}', function ($id) {
//     return ApiData::findOrFail($id);
// });

// // Create a new record
// Route::post('/myapi', function (Request $request) {
//     return ApiData::create($request->all());
// });

// // Update an existing record
// Route::put('/myapi/{id}', function (Request $request, $id) {
//     $data = ApiData::findOrFail($id);
//     $data->update($request->all());
//     return $data;
// });

// // Delete a record
// Route::delete('/myapi/{id}', function ($id) {
//     ApiData::findOrFail($id)->delete();
//     return 204;
// });
