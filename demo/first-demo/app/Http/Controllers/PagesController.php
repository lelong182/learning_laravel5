<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class PagesController extends Controller
{
  public function welcome()
  {
    $user = user::find('1');
    return view('welcome', compact('user'));
  }

  public function about()
  {
    return view('about');
  }
}
