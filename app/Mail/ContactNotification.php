<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $title;
    public string $contactMessage;
    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $message
     * @return void
     */

    public function __construct(string $name, string $email, string $title, string $contactMessage)
    {
        $this->name = (string) $name;
        $this->email = (string) $email;
        $this->title = (string) $title;
        $this->contactMessage = (string) $contactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject('New contact message')
                    ->view('emails.contact-notification');
    }
}
