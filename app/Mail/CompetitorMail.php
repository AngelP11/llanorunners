<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompetitorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dorsal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dorsal)
    {
        $this->dorsal = $dorsal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email')
                    ->from('hechizero19942@gmail.com')
                    ->subject('Llano Runners - Cross Country Camburito 12k');   
    }
}
