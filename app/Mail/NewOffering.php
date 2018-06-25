<?php

namespace App\Mail;

use App\Offering;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewOffering extends Mailable
{
    use Queueable, SerializesModels;

    public $offering;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Offering $offering)
    {
        $this->offering = $offering;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.newOffering');
    }
}
