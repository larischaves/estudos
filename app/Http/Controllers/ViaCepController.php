<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViaCepController extends Controller
{
   public function home()
   {
    return view('viacep.home');
   }
}
