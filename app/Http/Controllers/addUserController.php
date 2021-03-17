<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class addUserController extends Controller
{
    public function index()
    {
        return view('users.addUser');
    }

    public function store(Request $request)
    {

        $addUser = new User([
            'name' => $request->name,
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

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ic' => $data['ic'],
            'gender' => $data['gender'],
            'mnum' => $data['mnum'],
            'address' => $data['address'],
            'bank' => $data['bank'],
            'bankacc' => $data['bankacc'],
        ]);

        return view('welcome');
    }
}
