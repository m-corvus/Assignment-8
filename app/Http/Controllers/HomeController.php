<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function tentangkami() {
        return view('front.tentangkami');
    }

    public function kontakkami() {
        return view('front.kontakkami');
    }

    public function portofolio() {
        return view('portofolio2');
    }

    public function user($id) {
        return 'User ID : ' . $id;
    }

    public function admin() {
        return 'Ini halaman admin, anda sudah login';
    }

    public function warning() {
        return 'Halaman ini khusus admin';
    }
}
