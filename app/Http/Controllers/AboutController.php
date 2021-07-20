<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function nav()
    {
        return view('pages.about');
    }
}
