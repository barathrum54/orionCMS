<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusteriPaneliController extends Controller
{
     public function index()
    {

        return view('musteri.index');
        
    }
    public function hizmetler()
    {
        return view('musteri.hizmetler');
    }
}
