<?php

namespace App\Http\Controllers;

use DB;
use App\Mc1;
use App\Http\Requests;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index(){
        $table  = Mc1::all();
        // dd($leave);

        return view('leaves.leave', compact('table'));
    }

}
