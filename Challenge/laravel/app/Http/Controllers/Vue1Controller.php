<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vue1Controller extends Controller
{
      public function show($n)
    {
      return view('vue1');
    }
}
