<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;


class notification extends Mailable
{
    use Queueable, SerializesModels;
    public $field;
    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($field)
    {
        $this -> field = $field;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('dynamic_email_template');

    }
}
