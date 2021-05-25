<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    /**
     * Send mail function
     *
     */
    public function sendMail()
    {
        Mail::to('yahya.chafei99@gmail.com')
            ->cc('cc-example@gmail.com')
            ->bcc('wedigitalpro.website@gmail.com')
            ->send(new TestMail());
        
        if (Mail::failures()) {
            // return with failed message
        }

        // return with success message
    }
}