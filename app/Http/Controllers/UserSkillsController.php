<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSkills;
use Illuminate\Support\Facades\Auth;

class UserSkillsController extends Controller
{
    public function skillsform()
    {
      return view('profile.skills.skills-form');
    }

    public function store(Request $request)
    {
      $request->validate([
            'laravel_skills' => 'nullable|string|max:100', // Adjust max length as needed
            'other_skills' => 'nullable|string|max:50', // Adjust max length as needed
      ]);

      $skills = new UserSkills();
      $userId = Auth::id();
      $skills->set_user_id($userId);
      $skills->set_laravel_skills($request->input('laravel_skills'));
      $skills->set_other_skills($request->input('other_skills'));
      $skills->save();
      return redirect()->route('user.show', ['userId' => $userId]);
    }
}
