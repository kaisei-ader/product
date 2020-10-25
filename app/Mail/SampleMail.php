<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $tell;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->tell = $inputs['tell'];
        $this->message = $inputs['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('kaisei101010@gmail.com')
            ->subject('自動送信メール')
            ->view('mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'tell' => $this->tell,
                'body' => $this->message,
            ]);
    }
}
