<?php

namespace App\Listeners\SendChat;

use App\Events\NewChatMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MessageNotification
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
     * @param  NewChatMessage  $event
     * @return void
     */
    public function handle(NewChatMessage $event)
    {
        //
    }
}
