<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConformationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $car_name, $total_cost, $start, $end;

    /**
     * Create a new message instance.
     */
    public function __construct($car_name, $total_cost, $start, $end)
    {
        // Assigning the passed parameters to the public properties
        $this->car_name = $car_name;
        $this->total_cost = $total_cost;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Conformation Car Booking',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.mailTemplete', // The email template to be used
            with: [
                'car_name' => $this->car_name,       // Passing the car name to the view
                'total_cost' => $this->total_cost,   // Passing total cost to the view
                'start' => $this->start,             // Passing the start date to the view
                'end' => $this->end,                 // Passing the end date to the view
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
