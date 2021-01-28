<?php

namespace App\Mail;

use Mail;
use App\Mail\MailNotify;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $page_info = [
            "page_name" => "CONTACT",
            "active" => "active"
        ];
        return $this->subject('Mail from BK ECommerce')
        ->view('front.cart',compact('page_info'));
    }
}
