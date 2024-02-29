<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCertificationsController extends Controller
{
    //
}
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserCertificates;
use App\Models\UserProjects;
use App\Models\UserWorkExperience;
use App\Models\UserSkills;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            abort(404, 'User not found');
        }

        $profile = $user->profile;
        $certificates = $user->certificates;
        $projects = $user->projects;
        $workExperiences = $user->workExperiences;
        $skills = $user->skills;

        return view('user.profile', compact('user', 'profile', 'certificates', 'projects', 'workExperiences', 'skills'));
    }

    public function updateProfile(Request $request, $userId)
    {
        // Validation logic for updating profile

        $user = User::find($userId);

        if (!$user) {
            abort(404, 'User not found');
        }

        // Update user profile
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // Add other fields as needed
        ]);

        // Update user profile details
        $user->profile->update([
            'job_title' => $request->input('job_title'),
            'company' => $request->input('company'),
            // Add other fields as needed
        ]);

        // Update user certificates
        $user->certificates->update([
            'laravel_certifications' => $request->input('laravel_certifications'),
            'other_certifications' => $request->input('other_certifications'),
            // Add other fields as needed
        ]);

        // Update user projects, work experiences, and skills similarly...

        return redirect()->route('user.show', ['userId' => $userId])->with('success', 'Profile updated successfully');
    }

    // Add methods for creating, updating, and displaying user projects, work experiences, and skills...

    // Example method to show user projects
    public function showProjects($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            abort(404, 'User not found');
        }

        $projects = $user->projects;

        return view('user.projects', compact('user', 'projects'));
    }
}
