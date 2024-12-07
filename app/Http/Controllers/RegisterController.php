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
      'name' => [
          'required', 
          'string', 
          'min:3',               // Minimum length of 3 characters
          'max:20',              // Maximum length of 20 characters
          'regex:/^[a-zA-Z0-9._]+$/', // Alphanumeric, periods, and underscores only
          'not_regex:/^[_\.]/',       // Cannot start with underscore or period
          'not_regex:/[_\.]$/',       // Cannot end with underscore or period
          'not_regex:/[_\.]{2,}/',    // No consecutive underscores or periods
      ],
      'email' => [
        'required',
        'email:rfc,dns', // Validate against RFC standards and DNS records
        'max:250',
        'unique:users',   // Ensure uniqueness in the `users` table
      ],
      
      'password' => [
        'required',
        'string',
        'min:8', // Minimum length of 8 characters
        'max:64', // Maximum length of 64 characters (optional but practical)
        'confirmed', // Ensure the password matches its confirmation field
        'regex:/[a-z]/', // At least one lowercase letter
        'regex:/[A-Z]/', // At least one uppercase letter
        'regex:/[0-9]/', // At least one digit
        'regex:/[@$!%*?&]/', // At least one special character
      ],
    
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
