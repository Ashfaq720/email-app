<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendingController extends Controller
{
    function sendEmail()
    {
        $emailTo = "ashfaqdhrubo.315@gmail.com";
        $emailSubject = "This is your OTP Mail";
        $otp = 224466;

        Mail::to($emailTo)
            ->later(now()->addMinutes(2), new WelcomeMail($emailSubject, $otp));


        return response()->json(['success' => true, 'message' => 'Email Sent Successfully']);
    }
    
    // public function sendWelcomeEmail(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //     ]);

    //     $emailTo = $request->input('email');
    //     $emailSubject = "This is your OTP Mail";
    //     $otp = rand(1000, 9999); // Generate a random 4-digit OTP

    //     Mail::to($emailTo)
    //         ->later(now()->addMinutes(2), new WelcomeMail($emailSubject, $otp));

    //     return response()->json(['success' => true, 'message' => 'Welcome Email Sent Successfully']);
    // }
    

}
