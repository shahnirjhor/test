<?php

namespace App\Listeners;

use App\Mail\CareerFormMail;
use App\Events\CareerFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCareerFormSubmittedNotification
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
     * @param  \App\Events\CareerFormSubmitted  $event
     * @return void
     */
    public function handle(CareerFormSubmitted $event)
    {
        Mail::to('info@lesgroup.in')->send(new CareerFormMail($event->data));
    }
}
