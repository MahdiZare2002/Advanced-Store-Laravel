<?php

namespace App\Http\Services\Message\Email;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailViewProvider extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($subject, $details, $from)
    {
        $this->subject = $subject;
        $this->details = $details;
        $this->from = $from;
    }

    public function build(){
        return $this->subject($this->subject)->view('emails.send-otp');
    }
}
