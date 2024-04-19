<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfileImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileImageController extends Controller
{
    public function uploadProfileImage(Request $request)
    {

      $user_profile_image = new UserProfileImage();
      $user_in_session = Auth::user();

      // validation of the profile_image
      $request->validate([
       'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
      ]);

    //check if the profile image request is successful
    if ($request->hasFile('profile_image')) {

             //store the image file in the public directory
             $profile_image = time().".".$request->file('profile_image')->extension();
             Storage::disk('public')->put(
               $profile_image , file_get_contents($request->file('profile_image')->getRealPath())
             );

             //remove an existing image
             if ($user_in_session->profileImage) {
               $user_in_session->profileImage->delete();
             }

             //save the profileimage data to the database
             $new_profile_image = New UserProfileImage();
             $new_profile_image->set_user_id(Auth::id());
             $new_profile_image->set_user_profile_image($profile_image);
             $new_profile_image->save();
             return redirect()->back();
     }else{
       return response()->json(['error' => 'Your error message herekkk'], Response::HTTP_BAD_REQUEST);

     }

    return response()->json(['error' => 'hmm'],
    Response::HTTP_BAD_REQUEST);
    }

    public function destroy(UserProfileImage $profileImage)
    {
        $profileImage->delete();
        return redirect()->back();
    }
}
