<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    public function __construct(pubic Job $jobListing
    {
        //
    }

    public function handle(): void
    {
        logger('Translating ' . $this->jobListing->title . ' to Spanish');
    }
}
