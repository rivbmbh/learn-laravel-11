<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "<h1>Hello World Happy</h1>";
    }
    
    public function coba()
    {
        $data = [
            'nama' => 'Rivaldo B AngelRAB'
        ];
        return view('coba.hello', $data);
    }
}