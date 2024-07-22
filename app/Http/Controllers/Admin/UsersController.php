<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;


class UsersController extends Controller
{
    public function index()
    {   
        
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users.index',compact('users'));
    }
}
