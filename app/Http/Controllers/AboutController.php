<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
/**
* Handle the incoming request.
*
* @param \Illuminate\Hzttp\Request $request
* @return \Illuminate\Http\Response
*/
public function __invoke(Request $request)

{
$about = "Pastinya lebih CRISPYY !!!!";
$about1 = "Banyak varian menu yang pastinya menyerap sampai to the bone.";
$about2 = "Kandungan daging dari ayam kami lebih besar dari yang lainnya karena kami memilih ayam yang terbaik untuk pelanggan kami.";

return view('about', compact('about','about1','about2'));

}
}

