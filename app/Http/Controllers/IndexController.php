<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function nav()
    {
        return view('welcome');
    }
}
