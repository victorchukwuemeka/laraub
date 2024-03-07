<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCertifications;
use Illuminate\Support\Facades\Auth;

class UserCertificationsController extends Controller
{
      public function certificatesform()
      {
        return view('profile.certificates.certificates-form');
      }

      public function store(Request $request)
      {
        $request->validate([
           'laravel_certifications' => 'nullable|string|max:255',
           'other_certifications' => 'nullable|string|max:255',
        ]);
        $user_certifications = new UserCertifications();
        $userId = Auth::id();
        $user_certifications->set_user_id($userId);
        $user_certifications->set_laravel_certifications($request->input('laravel_certifications'));
        $user_certifications->set_other_certifications($request->input('other_certifications'));
        $user_certifications->save();
        return redirect()->route('user.show', ['userId' => $userId]);
      }
}
