<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

  public function register(){
    return view('auth.register');
  }


  public function store(Request $request){

    $request->validate([
      'name' => 'required|string|max:250',
      'email' => 'required|email|max:250|unique:users',
      'password' => 'required|min:8|confirmed',

    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'role'  => 'client'
    ]);

     $credentials = $request->only('email', 'password');
     Auth::attempt($credentials);
     $request->session()->regenerate();
     return redirect()->route('home')
     ->withSuccess('You have successfully registered & logged in!');
   }


}
