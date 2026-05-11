<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CongratulationsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $congratulation;

    /**
     * Create a new message instance.
     */
    public function __construct($congratulation)
    {
        $this->congratulation = $congratulation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'تهنئة جديدة من ' . $this->congratulation['name'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.congratulations',
            with: [
                'name' => $this->congratulation['name'],
                'message' => $this->congratulation['message'],
                'wedding_name' => $this->congratulation['wedding_name'],
            ]
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
