<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function nav()
    {
        return view('pages.config');
    }
}
