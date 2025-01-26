<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendSubscriberEmail
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
    public function handle(UserSubscribed $event): void
    {
        //dd('Listener Waiting ' . $event->name);
        Mail::raw('با تشکر از شما بابت عضوبت در خبرنامه بلاگ زین',function ($message) use ($event){
            $message->to($event->user->email);
            $message->subject('خوش آمدید به خبرنامه بلاگ زین');

        });

    }
}
