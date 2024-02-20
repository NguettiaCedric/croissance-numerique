<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $contact;

    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    /* public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',    
        );
        
    } */


    /* public function build()
    {
        return $this->form('iko.drico@gmail.com')
                    ->subject('Demande de Contact')
                    ->view('emails.contact');
    } */

    public function build()
    {
        return $this->from('iko.drico@gmail.com')
                    ->subject('Demande de Contact')
                    ->view('emails.contact');
    }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }

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
