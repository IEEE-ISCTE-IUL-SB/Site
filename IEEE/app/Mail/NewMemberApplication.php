<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewMemberApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $newmembernumber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newmembernumber)
    {
        $this->newmembernumber=$newmembernumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->newmembernumber > 1) $subject = 'Today there were '. $this->newmembernumber . ' new member applications for the IEEE Iscte Student Branch!';
        else $subject = 'Today there was a new member application for the IEEE Iscte Student Branch!';

        return $this->from('drenandoeguilierme@gmail.com')->subject($subject)->view('emails/newmemberapplicationemail');
    }
}
