<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function fotos()
    {
        return view('fotos');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function about()
    {
        return view('about');
    }
    public function servicios()
    {
        return view('servicios');
    }
}