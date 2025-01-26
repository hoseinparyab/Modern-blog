<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class UpdateSubscribersTable
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
        //Query Insert
        DB::table('subscribers')->insert([
            'email'=>$event->user->email,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
