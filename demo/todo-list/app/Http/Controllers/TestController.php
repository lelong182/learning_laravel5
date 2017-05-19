<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  function __construct()
  {
    $this->middleware('test');
  }

  function about()
  {
    return view('about');
  }

  function contact()
  {
    return view('contact');
  }
}
