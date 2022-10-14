<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
    * Handle the incoming request.
    *
    * @param \Illuminate\Hzttp\Request $request
    * @return \Illuminate\Http\Response
    */
    public function __invoke(Request $request)
    
    {
    $menu1 = "Original";
    $menu2 = "Crispy";
    $menu3 = "Crispy Barbeque Sauce";
    $menu4 = "Crispy Salted Egg";
    $menu5 = "Crispy Chilli Oil";
    $menu6 = "Crispy Geprek";
    $menu7 = "Sambel Matah";
    $menu8 = "Sambel Ijo";
    $menu9 = "Sambel Balado";
    $menu10 = "Sambel Setan";


    
    
    return view('menu', compact('menu1','menu2','menu3','menu4','menu5','menu6','menu7','menu8','menu9','menu10'));
    
    }
    }
