<?php

namespace App\Providers;

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
        \App::bindMethod(TestJob::class,'@handle',function($job){
           return $job->hande();
        });
    }
}
