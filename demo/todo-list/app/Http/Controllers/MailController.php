<?php

namespace App\Http\Controllers;

use App\Mail\NewMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
  function email()
  {
    return view('sendemail');
  }

  function send()
  {
//      Mail::send(['html'=>'mail'], ['name', 'Le Vu Thiet Long'], function ($message) {
//        $message->to('levuthietlong@gmail.com', 'Le Long Gmail')->subject('Test message');
//        $message->from('levuthietlong@yahoo.com', 'Le Long Yahoo');
//      });
    Mail::send(new SendMail());
  }

  function sendNew()
  {
    Mail::send(new NewMail());
  }
}
