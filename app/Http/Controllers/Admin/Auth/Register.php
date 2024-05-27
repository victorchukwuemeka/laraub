<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Register extends Controller
{
  public function showRegistrationForm(){
    return view('admin.auth.register');
  }

  public function register(Request $request){

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);
    //dd($request);
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'admin'
    ]);

    return redirect()
         ->route('admin.home')
         ->with('success', 'Admin registered successfully');
  }


}
