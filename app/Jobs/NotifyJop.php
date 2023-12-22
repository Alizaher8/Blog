<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use  App\Traits\SendNotifyTrait;


class NotifyJop implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,SendNotifyTrait;

    /**
     * Create a new job instance.
     */
    private $data;
    public function __construct($data)
    {
        $this->data =$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $this->sendNotify('New User Registered',
          ' is Registered now check your inbox to improve his','https://www.google.com');

    }
}
