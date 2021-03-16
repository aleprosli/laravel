<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class addUserController extends Controller
{
    public function index()
    {
        return view('users.addUser');
    }

    public function store()
    {

        $addUser = new User([
            'name' => $request->name ?? null,
            'email' => $request->email,
            'password' => $request->password,
            'ic' => $request->ic,
            'gender' => $request->gender,
            'mnum' => $request->mnum,
            'address' => $request->address,
            'bank' => $request->bank,
            'bankacc' => $request->bankacc,
            
        ]);

        $addUser->save();

        return view('welcome');
    }
}
