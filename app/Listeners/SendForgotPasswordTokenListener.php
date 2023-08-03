<?php

namespace App\Listeners;

use App\Mail\ForgotPasswordTokenMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendForgotPasswordTokenListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $user = $event->user;
        Mail::to($user->email)->send(new ForgotPasswordTokenMail($user));
    }
}
