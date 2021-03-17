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

    public function actionApprove ($mcfId){
        $mcf =  Mc1::find($mcfId);
        // dd($mcf);
        $mcf->status = "Approve";
        $mcf->save();

        // return view('leaves.action', compact('mcf'));
        return redirect()->back()->with("status", "deleted");;

    }

    public function actionDecline ($mcfId){
        $mcf =  Mc1::find($mcfId);
        $mcf->status = "Decline";
        $mcf->save();


        // return view('leaves.action', compact('mcf'));
        return redirect()->back()->with("status", "deleted");;

    }



}
