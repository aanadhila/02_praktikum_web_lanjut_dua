<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nim : 2041720023, Nama : Annisa Aulia Nadhila, Kelas : TI 2C";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
