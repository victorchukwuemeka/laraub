<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thank you for subscribing!');
        }

        return redirect()->back()->with('error', 'You are already subscribed.');
    }
}
