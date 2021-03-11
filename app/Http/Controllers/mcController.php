<?php

namespace App\Http\Controllers;
use App\Mc1;
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
        // dd(auth()->user()->id);
        // dd($request);

        $mc = new Mc1([
            'name' => $request->name ?? null,
            'reason' => $request->reason,
            'user_id' => auth()->user()->id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'created_by' => auth()->user()->id,

        ]);

        $mc->save();

        return view('leaves.leave');
    }
}



