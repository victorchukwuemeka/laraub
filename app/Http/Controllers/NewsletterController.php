<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Mail\UpdateNewsletter;
use Illuminate\Support\Facades\Mail;
use Newsletter;

class NewsletterController extends Controller
{
    public function sendUpdates()
    {
        $subscribers = Newsletter::getMembers()['members'];

        foreach ($subscribers as $subscriber) {
            $details = [
                'title' => 'Latest Updates on Our Project',
                'body' => 'Here is the latest news...'
            ];

            Mail::to($subscriber['email_address'])->send(new UpdateNewsletter($details));
        }

        return response()->json(['message' => 'Newsletter sent successfully!']);
    }
}
