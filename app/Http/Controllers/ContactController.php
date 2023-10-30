<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // Validate the form data
        $rules = [
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422); // 422 is the HTTP status code for unprocessable entity
        }

        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $contactMessage = $request->input('message');

        // Send an email
        $recipientEmail = env('MAIL_USERNAME');

        Mail::to($recipientEmail)->send(new ContactFormMail($firstName, $lastName, $email, $phone,$subject, $contactMessage));

        // Redirect back with a success message
        return response()->json([
            'success' => true,
            'message' => 'Message has been sent!'
        ]);
    }
}
