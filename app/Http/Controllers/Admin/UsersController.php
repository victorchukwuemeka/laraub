<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index()
    {   
        $visitorCount = $this->getVisitorCount();
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users.index',compact('users', 'visitorCount'));
    }

    public function getVisitorCount(){
        return  $visitorCount = DB::table('visitors')->count();
        //return view('dashboard', ['visitorCount' => $visitorCount]);
    }
}
