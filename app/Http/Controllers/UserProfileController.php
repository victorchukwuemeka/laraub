<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;

class UserProfileController extends Controller
{


    public function editProfileForm($userId)
    {
      $user = User::with('profile', 'certificates', 'projects','experiences')->find($userId);
      //dd($user);
      if (!$user) {
        abort(404, 'User not found');
      }
      return view('profile.profile-edit', compact('user'));
    }


    public function showProfile($user_id)
    {
      $user = User::find($user_id);
      if (!$user) {
           abort(404, 'User not found');
       }
      $user = User::with('profile')->find($user_id);

      //$$user->profile();
      $profile = User::find($user_id)->profile;
      //$profile = UserProfile::all();
      //dd($profile);
      $profile = $user->profile;
      $certificates = $user->certificates;
      $projects = $user->projects;
      $workExperiences = $user->experiences;
      $skills = $user->skills;
      return view('profile.show-profile', compact('user', 'profile', 'certificates', 'projects', 'workExperiences', 'skills'));
    }

    public function edit($id)
    {
      return view('profile.profile-edit', [
           'user' => $request->user(),
       ]);
    }

    public function updateProfile(Request $request, $userId)
    {
        // Validation logic for updating profile

        $user = User::find($userId);
        //dd($request->input('job_title'));

        if (!$user) {
            abort(404, 'User not found');
        }
        //uploading files
        $time = time();
        if ($request->hasFile('profile_image')) {
            $profile_image_name = $time.".".$request->file('profile_image')->extension();
            //dd($profile_image_name);
            Storage::disk('public')->put(
              $profile_image_name, file_get_contents($request->file('profile_image')->getRealPath())
            );
            $user->set_profile_image($profile_image_name);
            $user->save();
        }


        // Update user profile
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Add other fields as needed
        ]);

        // Update user profile details

        $profile = new UserProfile();
        $profile->set_user_id($user->id);
        $profile->set_job_title($request->input('job_title'));
        $profile->set_company($request->input('company'));
        $profile->set_company_website($request->input('company_website'));
        $profile->set_education($request->input('education'));
        $profile->set_location($request->input('location'));
        $profile->set_availability($request->input('availability'));
        $profile->set_contact_preferences($request->input('contact_preferences'));
        $profile->save();

        // Update user certificates
        dd($request);
        $user->certificates()->create();
        $certificates->set_laravel_certifications($request->input('laravel_certifications'));
        $certificates->set_other_certifications($request->input('other_certifications'));
        $certificates->save();

        // Update user projects,
        $projects =  $user->projects;
        $projects->set_project_name($request->input('project_name'));
        $projects->set_description($request->input('description'));
        $projects->set_link($request->input('link'));
        $projects->set_technologies_used($request->input('technologies_used'));
        $projects->save();


        //work experiences
        $experiences =  $user->experiences;
        $experiences->set_position($request->input('position'));
        $experiences->set_company($request->input('company'));
        $experiences->set_start_date($request->input('start_date'));
        $experiences->set_end_date($request->input('end_date'));
        $experiences->save();

        //skills similarly...
        $skills =  $user->skills;
        $skills->set_laravel_skills($request->input('laravel_skills'));
        $skills->set_other_skills($request->input('other_skills'));
        $skills->save();


        return redirect()->route('user.show', ['userId' => $userId])->with('success', 'Profile updated successfully');
    }


}
