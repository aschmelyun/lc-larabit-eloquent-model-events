<?php

namespace App\Listeners;

use App\Events\IssueCreated;
use App\Mail\IssueCreated as MailIssueCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendIssueCreatedEmail
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
    public function handle(IssueCreated $event)
    {
        return Mail::to('alerts@eloquent-model-events.test')
            ->send(new MailIssueCreated($event->issue));
    }
}
