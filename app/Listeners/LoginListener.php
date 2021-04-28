<?php

namespace App\Listeners;

use App\Models\UserLog;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $userLogs = new UserLog();
        $userLogs->create([
            'user_id' => $event->user->id,
            'login_time' => now(),
            'login_ip' => request()->getClientIp(),
        ]);
    }
}
