<?php

namespace App\Http\Controllers;

use App\Models\destinations;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function home() {
        return view("home");
    }
    public function profile() {
        return view("profile");
    }
    public function contact() {
        return view("contact");
    }
}
