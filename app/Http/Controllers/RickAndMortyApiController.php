<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RickAndMortyApiController extends Controller
{
   public function home()
   {
    return view('rickandmortyapi.home');
   }
}
