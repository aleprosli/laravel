<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mcController extends Controller
{
    public function index()
    {
        return view('leaves.mc');
    }

    public function create()
    {
        return view('leaves.mc');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'reason' => 'nullable',
        ]);
    }
}



