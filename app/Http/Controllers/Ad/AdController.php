<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
  public function index()
  {
    $ads = Ad::all();
    return view('admin.ads.ads-index',compact('ads'));
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
            $file = $request->file('media');
            $ad->media = $file->store('ads', 'public');
            $ad->media_type = in_array($file->extension(), ['jpeg', 'png', 'jpg', 'gif', 'svg']) ? 'image' : 'video';
        }
        $ad->user_id = auth()->id();
        $ad->save();

        return redirect()->route('ads.index')->with('success', 'Ad created successfully.');
    }
}
