<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use Auth;
//use Illuminate\Support\Facades\Storage;


class AdController extends Controller
{
  public function index()
  {
    $ads = Ad::where('user_id', Auth::id())
     ->orderBy('created_at', 'desc')->get();
    return view('ads.index', compact('ads'));
  }

  public function create()
  {
    return view('ads.create');
  }

   public function store(Request $request)
   {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'media' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,flv|max:20480', // 20MB max
            'url' => 'required|url',
        ]);

        $ad = new Ad($request->all());


        if ($request->hasFile('media')) {
            //storage the file data in the database
            $file = $request->file('media');
            $ad->media = $file->store('ads', 'public');//store the file to public/ads directory and save the path in the db
            $ad->media_type = in_array($file->extension(), ['jpeg', 'png', 'jpg', 'gif', 'svg']) ? 'image' : 'video';

        }
        $ad->user_id = auth()->id();
        $ad->verified = false;
        $ad->save();

        return redirect()->route('ads')
         ->with('success', 'Ad created successfully.');
    }

}
