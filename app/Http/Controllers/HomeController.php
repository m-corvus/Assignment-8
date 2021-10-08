<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
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
