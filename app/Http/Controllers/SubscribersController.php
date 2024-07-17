<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;

class SubscribersController extends Controller
{
    public function store(Request $request)
    {   
    
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscribers::create(['email' => $request->email]);
        return back();
    }
}
