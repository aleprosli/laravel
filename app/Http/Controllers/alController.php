<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alController extends Controller
{
    public function index()
    {
        return view('leaves.al');
    }
}
