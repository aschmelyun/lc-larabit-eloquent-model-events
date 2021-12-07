<?php

namespace App\Listeners;

use App\Events\IssueDeleted;
use App\Mail\IssueDeleted as MailIssueDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendIssueDeletedEmail
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
    public function handle(IssueDeleted $event)
    {
        return Mail::to('alerts@eloquent-model-events.test')
            ->send(new MailIssueDeleted($event->issue));
    }
}
