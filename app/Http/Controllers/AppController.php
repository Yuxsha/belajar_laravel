<?php

namespace App\Http\Controllers;

use App\Models\destinations;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view("home");
    }
    public function profile(){
        return view("profile");
    }
    public function contact(){
        return view("contact");
    }
    public function data_destinations(){
        $destinations = destinations::get();
        $data = ([
            "destinations" => $destinations,
        ]);
        return view("data_destinations",$data);
    }
    public function hapus_destinations($id){
        destinations::where("id",$id)->delete();
        return redirect("data-destinations");
    }
    public function form_tambah(){
        return view("form_tambah");
    }
    public function proses_tambah_destinations(Request $request){
        $name = $request -> name;
        $location = $request -> location;
        $details = $request -> details;
        $day_open = $request -> day_open;
        $time_open = $request -> time_open;
        $price = $request -> price;

        destinations::create([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);
        session()->flash("pesan","Data ".$name." berhasil ditambah.");
        return redirect("data-destinations");
    }
    public function edit_destinations($id){
        $destinations = destinations::where("id",$id)->first();
        if(!$destinations){
            abort(404);
        }
        $data = ([
            "destinations" => $destinations
        ]);
        return view("edit_destinations",$data);
    }
    public function proses_edit_destinations(Request $request){
        $id = $request -> id;
        $name = $request -> name;
        $location = $request -> location;
        $details = $request -> details;
        $day_open = $request -> day_open;
        $time_open = $request -> time_open;
        $price = $request -> price;

        destinations::where("id",$id)->update([
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);
        session()->flash("pesan","Data ".$name." berhasil diubah.");
        return redirect("data-destinations/".$id."/edit");
    }
}


