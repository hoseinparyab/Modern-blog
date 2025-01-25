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

    }

    /**
     * Handle the event.
     */
    public function handle(UserSubscribed $event): void
    {
        Mail::raw('باتشکر از شما برای عضویت در خبرنامه', function ($message)use ($event) {
            $message->to($event->user->email)
                ->subject('ثبت نام در خبرنامه با موفقیت انجام شد');
        });    }
}
