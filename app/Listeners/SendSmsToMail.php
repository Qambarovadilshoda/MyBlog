<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendSmsToMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }
    public function __invoke(PostCreated $post){
        Log::info("Send message to user's email");
    }
    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Log::alert("Send message to user's email");
    }
}
