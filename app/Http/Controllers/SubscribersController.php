<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class SubscribersController extends Controller
{
    public function store(Request $request)
    {   
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL);
       // $request->validate([
         //   'email' => 'required|email|unique:subscribers,email',
        //]);
        $validator = Validator::make(['email' => $email], [
            'email' => [
                'required',
                'email:rfc,dns',
                'valid_email_domain',
                Rule::notIn(['example.com', 'test.com','test.org','text.edu']), // Add known invalid domains
                function ($attribute, $value, $fail) {
                    if (strpos($value, '_') !== false) {
                        $fail('The '.$attribute.' cannot contain underscores.');
                    }
                },
            ],
        ]);
        
        if ($validator->fails()) {
            \Log::warning('Invalid email subscription attempt: ' . $email);
            return back()->withErrors($validator);
        }
       
        
        Subscribers::create(['email' => $request->email]);
        return back();
    }
}


