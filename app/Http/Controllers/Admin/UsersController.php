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
        $usersCount = $this->getUsersCount();
        return view('admin.users.index',compact('users', 'visitorCount', 'usersCount'));
    }

    public function getVisitorCount(){
        return  $visitorCount = DB::table('visitors')->count();
        //return view('dashboard', ['visitorCount' => $visitorCount]);
    }

    public function getUsersCount(){
        return User::count();
    }
}
