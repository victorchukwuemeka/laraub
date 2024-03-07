<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiences;
use Illuminate\Support\Facades\Auth;

class ExperiencesController extends Controller
{
    public function experiencesform()
    {
      return view('profile.experiences.experiences-form');
    }

    public function store(Request $request)
    {

      $request->validate([
        'position' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
      ]);

      $userId = Auth::id();
      $experiences = new Experiences();
      $experiences->set_user_id($userId);
      $experiences->set_position($request->input("position"));
      $experiences->set_company($request->input("company"));
      $experiences->set_start_date($request->input("start_date"));
      $experiences->set_end_date($request->input("end_date"));
      $experiences->save();
      return redirect()->route('user.show', ['userId' => $userId]);
    }
}
