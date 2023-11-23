<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

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

Route::get('home', [AppController::class,"home"]);

Route::get("template", function() {
    return view('template'); 
});

Route::get("tambah",[AppController::class,"tambah"]);
Route::post("tambah",[AppController::class,"tambah"]);

Route::get("data/{id}/edit",[AppController::class,"edit"]);
Route::get("edit",[AppController::class,"proses_edit_destinations"]);

Route::get("data/{id}/hapus",[AppController::class,"hapus"]);