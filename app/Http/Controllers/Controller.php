<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function onechange()
    {
        return view('register');
    }

    public function twochange()
    {
        return view('login');
    }
    // public function threechange()

    public function fourchange()
    {
        return view('home');
    }

}
