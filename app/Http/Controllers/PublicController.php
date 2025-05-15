<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // funzione di reindirizzamento alla homepage
    public function index(){
        return view('index');
    }
}
