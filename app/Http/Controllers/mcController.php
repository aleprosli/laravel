<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mcController extends Controller
{
    public function index()
    {
        return view('leaves.mc');
    }
}
