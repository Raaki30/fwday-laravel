<?php

    

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CaptchaController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form fields...

        // Verify hCaptcha
        $response = Http::asForm()->post('https://hcaptcha.com/siteverify', [
            'secret' => env('HCAPTCHA_SECRET'),
            'response' => $request->input('h-captcha-response'),
            // Add additional fields if necessary
        ]);

        // Handle hCaptcha verification response
        if ($response->successful() && $response['success']) {
            // hCaptcha verification successful, proceed with form submission or other actions
            // ...
            return redirect()->back()->with('success', 'Form submitted successfully');
        } else {
            // hCaptcha verification failed, handle accordingly
            // Display an error message or take necessary actions
            return redirect()->back()->with('error', 'hCaptcha verification failed. Please try again.');
        }
    }
}


?>