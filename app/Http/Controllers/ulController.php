<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ulController extends Controller
{
    public function index()
    {
        return view('leaves.ul');
    }
}
