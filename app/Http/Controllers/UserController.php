<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $table  = DB::select('SELECT * FROM `laravel1`.`users`');
        return view('users.index', compact('table'));
    }
    
}
