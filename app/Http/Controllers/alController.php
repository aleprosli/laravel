<?php

namespace App\Http\Controllers;
use App\Al;
use Illuminate\Http\Request;


class alController extends Controller
{
    public function index()
    {
        return view('leaves.al');
    }

    public function create()
    {
        return view('leaves.al');
    }

    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        // dd($request);

        $al = new Al([
            'name' => $request->name ?? null,
            'reason' => $request->reason,
            'user_id' => auth()->user()->id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'created_by' => auth()->user()->id,

        ]);

        $al->save();

        return view('leaves.leave');
    }
}
