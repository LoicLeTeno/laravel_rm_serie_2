<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $outils = ['tourne-vis', "clé-alaine", "scie", "marteau"];
        return view('pages.new', compact('outils'));
    }
}
