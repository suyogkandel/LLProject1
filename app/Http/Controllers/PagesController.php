<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $name='Suyog';
        return view('welcome', compact('name'));
    }

    public function about()
    {
        return view('about');
    }
}
