<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjiAnavaController extends Controller
{
    public function index()
    {
        return view('anava.index');
    }
}
