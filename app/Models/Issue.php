<?php

namespace App\Models;

use App\Events\IssueCreated;
use App\Events\IssueDeleted;
// use App\Mail\IssueCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Issue extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // protected $dispatchesEvents = [
    //     'created' => IssueCreated::class,
    //     'deleted' => IssueDeleted::class,
    // ];

    // protected static function booted()
    // {
    //     static::created(function ($issue) {
    //         Mail::to('alerts@eloquent-model-events.test')
    //             ->send(new IssueCreated($issue));
    //     });
    // }
}
