<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Subscribers;

class AdminSubscribersController extends Controller
{
    public function index()
    {
        $subscribers = Subscribers::orderBy('created_at', 'desc')->get();
        return view('admin.subscribers.index', compact('subscribers'));
    }
}
