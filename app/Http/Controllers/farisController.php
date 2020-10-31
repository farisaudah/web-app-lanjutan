<?php

namespace App\Http\Controllers;

class farisController extends Controller
{
    public function one()
    {
        return view("faris-1");
    }

    public function two()
    {
        return view("faris-2");
    }

    public function three()
    {
        return view("faris-3");
    }
}