<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); //ini merujuk ke halaman index.blade.php 
    }
    public function login(){
        return view('login');
    }
    
    public function about(){
        $data = [
            'name'      => 'Erlinda Nabilla Putri',
            'address'   => 'Banyumas',
            'email'     => 'Erlinda@gmail.com'
        ];
        return view(view: 'about', data: $data);
    }
}
