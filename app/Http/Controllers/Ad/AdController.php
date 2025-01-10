<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use Auth;
//use Intervention\Image\Facades\Image;
//use Intervention\Image\ImageManager;
//use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Laravel\Facades\Image;
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

  /**public function store(Request $request){
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
  }*/
  public function store(Request $request){
    $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'media' => [
        'required',
        'file',
        'mimes:svg,png',  // Restrict to logo-friendly formats
        'max:2048',       // 2MB max size
        'dimensions:min_width=200,min_height=200,max_width=2000,max_height=2000',
      ],
      'url' => 'required|url',
    ]);
    
    $ad = new Ad($request->all());
    
    if ($request->hasFile('media')) {
      $file = $request->file('media');

      //$manager = new ImageManager(new Driver());
      
        
      // Validate aspect ratio for logos
      $image = Image::read($file);
      
      $width = $image->width();
      $height = $image->height();
      $ratio = $width / $height;
        
      // Check if image is roughly square (between 0.8 and 1.2 ratio)
      if ($ratio < 0.8 || $ratio > 1.2) {
        return back()->withInput()
        ->withErrors(['media' => 'Logo must be roughly square in shape (1:1 ratio)']);
      }
      
      // Store the file
      $ad->media = $file->store('ads/logos', 'public');
      $ad->media_type = 'image';  // Set specific type for logos
    }

    $ad->user_id = auth()->id();
    $ad->verified = false;
    $ad->save();

    return redirect()->route('ads')->with(
      'success', 'Ad created successfully. Your logo will be reviewed shortly.'
    );
  }
  public function trackVisit($id){
    $ad = Ad::find($id);
    if (!$ad) {
      return redirect()->back()->with('error', 'Ad not found.');
    }
    
    // Increment the visit count
    $ad->increment('clicks');
    
    // Redirect to the ad's URL
    return redirect($ad->url);
  }
}
