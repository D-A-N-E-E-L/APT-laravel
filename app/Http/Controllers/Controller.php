<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('home');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function info()
    {
        return view('info');
    }
}
