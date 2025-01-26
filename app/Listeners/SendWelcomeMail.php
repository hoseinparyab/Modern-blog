<?php

namespace App\Listeners;

use App\Jobs\SendWelcomeMailJob;
use App\Mail\WelcomeMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class SendWelcomeMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //

    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        //
        Mail::to($event->user->email)->send(new WelcomeMail($event->user,$event->password,true));
//        SendWelcomeMailJob::dispatch($event->user,$event->password)->delay(now()->addMinutes(1));

    }
}
