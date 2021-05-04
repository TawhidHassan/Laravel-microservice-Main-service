<?php

namespace App\Providers;


use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
        
        \App::bindMethod(ProductCreated::class,'@handle',function($job){
            return $job->hande();
         });
         \App::bindMethod(ProductUpdated::class,'@handle',function($job){
            return $job->hande();
         });
         \App::bindMethod(ProductDeleted::class,'@handle',function($job){
            return $job->hande();
         });

    }
}
