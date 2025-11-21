<?php

namespace App\Services;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class indexServices {
    public static function sendEmailServices($request){
        $email = $request->input('email');
        $title = $request->input('title');
        $body = $request->input('body');

        // Etong Details aray nato is connected sa resources/views/mail/send.blade.php and purpose neto ay ipasa yung mga data na gusto mo makita sa email template
        // Kapag wala ka namang ipapasa na data pwede mo tong iwan na empty array lang [].
        $details = [
            'title' => $title,
            'body' => $body,
            'email'=>$email
        ];

        try {
            Mail::to($email)->send(new SendMail($details));

            $success = 1;
            return view('index', compact('success'));
        } catch (\Exception $e) {

            // Email failed
            return "Email failed: " . $e->getMessage();
        }
    }
}