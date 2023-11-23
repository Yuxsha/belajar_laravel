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

Route::get('profile',[AppController::class,"profile"]);
Route::get('contact',[AppController::class,"contact"]);

Route::get('data-destinations', [AppController::class,"data_destinations"]);

Route::get("data-destinations/{id}/hapus",[AppController::class,"hapus_destinations"]);
Route::get("form-tambah",[AppController::class,"form_tambah"]);
Route::post("tambah-destinations",[AppController::class,"proses_tambah_destinations"]);
Route::get("data-destinations/{id}/edit",[AppController::class,"edit_destinations"]);
Route::get("edit-destinations",[AppController::class,"proses_edit_destinations"]);

