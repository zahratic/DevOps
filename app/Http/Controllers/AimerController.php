<?php

namespace App\Http\Controllers;

use App\Models\Aimer;
use Illuminate\Http\Request;

class AimerController extends Controller
{
    public function liste()
    {
        $aime=Aimer::All();
        return view('welcome',compact('aime'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request  $request)
    {
        $a=new Aimer();
        $a->etat=1;
        $a->save();
        return redirect()->route('welcom');
    }
}
