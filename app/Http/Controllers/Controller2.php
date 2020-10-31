<?php
namespace App\Http\Controllers;

class Controller2 extends Controller{
    public function film(){
        return view('Up');
    }
        public function makanan(){
        return view('geprek');
    }
        public function minuman(){
        return view('milo');
    }
}