<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\user;

class SendMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build(Request $request)
  {
    $user = user::find(1);
    return $this->view('mail', ['name' => $user->name, 'msg' => $request->message])
      ->from('levuthietlong@yahoo.com', 'Le Long Yahoo')
      ->to($request->to, 'Le Long Gmail')->subject('Test email');
  }
}
