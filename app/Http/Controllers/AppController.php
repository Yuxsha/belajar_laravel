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
    public function data() {
        return view("data");
    }
    public function tambah_destinations() {
        return view("tambah_destinations");
    }
    public function proses_tambah_destinations() {
        $id = $request->nip;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Destinations::create([
            "id" => $id,
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data Berhasil Ditambah");

        return redirect ('data');
    }
    public function edit($id){
        $destinations = Destinations::where("id",$id)->first();

        if(!$destinations){
            abort(404);
        }

        $data = ([
            "destinations" => $destinations
        ]);

        return view("edit",$data);
    }
    public function proses_edit_destinations() {
        $id = $request->nip;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Destinations::where("id",$id)->update([
            "id" => $id,
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data Berhasil Diubah");

        return redirect ("data/".$id."/edit");
    }
    public function hapus($id){
        Destinations::where("id",$id)->delete();
        return redirect("hapus");
    }
}

