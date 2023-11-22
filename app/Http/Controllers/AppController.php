<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function home() {
        return view("home");
    }
    public function profil() {
        return view("profil");
    }
    public function kontak() {
        return view("kontak");
    }
    public function data_destination() {
        return view("data_destination");
    }
    

}
