<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index() {
        return view('index');
    }
    public function preview(){
        return view('preview');
    }
    public function team(){
        return view('team');
    }
    public function contact(){
        return view('contact');
    }
    // public function DB(){
    //     $mahasiswa = DB::table('listuser')->get();
    //     return view('daftaruser',['listuser' => $listuser]);
    // }
}
