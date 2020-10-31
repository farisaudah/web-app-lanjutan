<?php

namespace App\Http\Controllers;

class malikController extends Controller
{
    public function satu()
    {
        return view("malik-1");
    }

    public function dua()
    {
        return view("malik-2");
    }

    public function tiga()
    {
        return view("malik-3");
    }
}