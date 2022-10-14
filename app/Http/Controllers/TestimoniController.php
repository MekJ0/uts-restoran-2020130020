<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
    * Handle the incoming request.
    *
    * @param \Illuminate\Hzttp\Request $request
    * @return \Illuminate\Http\Response
    */
    public function __invoke(Request $request)
    
    {
    $orang1 = "Michael Juliano";
    $orang2 = "Angel Putri";
    $orang3 = "Michelle Hanaya";
    $orang4 = "Lebron James";
    $orang5 = "Nick Carol";
  


    
    
    return view('testimoni', compact('orang1','orang2','orang3','orang4','orang5'));
    
    }
    }

