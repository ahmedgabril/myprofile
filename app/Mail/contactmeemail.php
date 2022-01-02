<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactmeemail extends Mailable
{
    use Queueable, SerializesModels;
protected $email,$message,$name;
    public function __construct($email,$message,$name)
    {
      $this->email = $email;
      $this->name = $name;
      $this->message = $message;

    }


    public function build()
    {
        return $this->from($this->email,$this->name)->subject("رساله تواصل من الموقع الشخصى")->view('emails.contactme')
        ->with(
            [
                'username'=>$this->name,
                'getemail'=>$this->email,
                'getmessage'=>$this->message,


                ]
        );

    }
}
