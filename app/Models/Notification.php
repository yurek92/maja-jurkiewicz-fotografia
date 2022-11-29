<?php

namespace App\Models;

use App\Mail\WeedingFormNotification;
use Illuminate\Support\Facades\Mail;

class Notification
{
    public static function sendWeedingFormNotification($weedingForm, $attachment)
    {
        Mail::to('majaboruk@gmail.com')->send(new WeedingFormNotification($weedingForm, $attachment));
    }
}
