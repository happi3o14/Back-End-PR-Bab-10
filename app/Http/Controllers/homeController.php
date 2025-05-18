<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // index
    public function index()
    {
        return view('home');
    }

    public function getName()
    {
        $name = "535240127 Happy Calista";
        return view('home', ['name' => $name]);
    }
}
