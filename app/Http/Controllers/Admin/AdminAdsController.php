<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdminAdsController extends Controller
{
    public function index()
    {

      $ads = Ad::where('verified', false)->orderBy('created_at', 'desc')->get();
      return view('admin.ads.index', compact('ads'));
    }

    
    public function verify($id)
    {
        $ad = Ad::find($id);
        $ad->verified = true;
        $ad->save();

        return redirect()->route('admin.ads.index')
         ->with('success', 'Ad verified successfully!');
    }
}
