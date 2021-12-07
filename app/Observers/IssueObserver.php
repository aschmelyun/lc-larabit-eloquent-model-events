<?php

namespace App\Observers;

use App\Mail\IssueCreated;
use App\Mail\IssueDeleted;
use App\Mail\IssueEdited;
use App\Models\Issue;
use Illuminate\Support\Facades\Mail;

class IssueObserver
{
    /**
     * Handle the Issue "created" event.
     *
     * @param  \App\Models\Issue  $issue
     * @return void
     */
    public function created(Issue $issue)
    {
        Mail::to('alerts@eloquent-model-events.test')
            ->send(new IssueCreated($issue));
    }

    /**
     * Handle the Issue "updated" event.
     *
     * @param  \App\Models\Issue  $issue
     * @return void
     */
    public function updated(Issue $issue)
    {
        Mail::to('alerts@eloquent-model-events.test')
            ->send(new IssueEdited($issue));
    }

    /**
     * Handle the Issue "deleted" event.
     *
     * @param  \App\Models\Issue  $issue
     * @return void
     */
    public function deleted(Issue $issue)
    {
        Mail::to('alerts@eloquent-model-events.test')
            ->send(new IssueDeleted($issue));
    }

    /**
     * Handle the Issue "restored" event.
     *
     * @param  \App\Models\Issue  $issue
     * @return void
     */
    public function restored(Issue $issue)
    {
        //
    }

    /**
     * Handle the Issue "force deleted" event.
     *
     * @param  \App\Models\Issue  $issue
     * @return void
     */
    public function forceDeleted(Issue $issue)
    {
        //
    }
}
