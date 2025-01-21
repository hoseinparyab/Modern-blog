<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public User $user,public $password,public $flag = false,public $socialMail = false)
    {
        //public User $user,public $password
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('hoseinparyab1@gmail.com',
                'مدیریت وب سایت بلاگ مدرن'),
            subject: 'بلاگ مدرن - خوش آمدید'
        //  to: 'develop-with-vahid@gmail.com',
//           replyTo: [
//               ''
//           ]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->flag){
            return [
//               Attachment::fromUrl('https://www.chilliapple.co.uk/blog/app/uploads/2022/02/imgpsh_fullsize_anim-scaled.jpg')->as('test.jpg')->withMime('image/jpg'),
            ];
        }
        return [];

    }
}
