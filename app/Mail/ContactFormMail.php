<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $subject;
    public $contactMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(string $firstName, string $lastName, string $email, string $phone, string $subject, string $message)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->contactMessage = $message;
    }

    public function build()
    {
        return $this
            ->from(env('MAIL_FROM_ADDRESS'), $this->firstName . ' ' . $this->lastName)
            ->subject($this->subject)
            ->view('emails.contact')
            ->with([
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->contactMessage,
            ]);
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Contact Form Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.contact',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
