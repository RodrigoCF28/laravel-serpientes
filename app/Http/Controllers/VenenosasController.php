<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenenosasController extends Controller
{
    public function index()
    {
    return view('venenosas');
    }
}