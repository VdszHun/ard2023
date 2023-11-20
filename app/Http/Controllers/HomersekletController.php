<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomersekletController extends Controller
{
    public function index(){
        return view('homerseklet');
    }
}
