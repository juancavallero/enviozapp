<?php

namespace App\Http\Controllers\Helpers;

class EmailHelper
{

    public static function SendMail($template, $mailData, $subject, $fromEmail, $fromName, $toEmail, $toName, $attachment = NULL){

        \Mail::send($template, $mailData, function($message) use ($fromEmail, $fromName, $toEmail, $toName, $subject, $attachment){
            $message -> to($toEmail, $toName);
            $message -> from($fromEmail, $fromName);
            $message -> subject($subject);

            if (! is_null($attachment) )
            {
                $message -> attach($attachment);
            }
        });
    }

    public static function IsValid($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}