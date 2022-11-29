<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeedingFormNotification extends Mailable
{
    use SerializesModels;

    protected $weedingForm;
    protected $attachment;

    public function __construct($weedingForm, $attachment)
    {
        $this->weedingForm = $weedingForm;
        $this->attachment = $attachment;
    }

    public function build()
    {
        return $this->subject('Nowy formularz ślubny - '.$this->weedingForm['para_mloda'].' ('.$this->weedingForm['termin_slubu'].')')
            ->attachData($this->attachment, 'formularz_slubny.pdf', [
                'mime' => 'application/pdf',
            ])->markdown('emails.weeding-form-notification');
    }
}
