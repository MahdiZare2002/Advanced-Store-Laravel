<?php

namespace App\Http\Services\Message\Email;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class MailViewProvider extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    protected $files;

    public function __construct($subject, $details, $from, $files = null)
    {
        $this->subject = $subject;
        $this->details = $details;
        $this->from = $from;
        $this->files = $files;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('emails.send-otp');
    }

    public function attachments()
    {
        $publicFiles = [];
        if ($this->files) {
            foreach ($this->files as $file) {
                array_push($publicFiles, public_path($file));
            }
        }
        return $publicFiles;
    }
}
