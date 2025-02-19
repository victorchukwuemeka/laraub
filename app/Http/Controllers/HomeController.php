<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelProjects;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        $projects = LaravelProjects::orderBy('created_at', 'desc')->paginate('9');
        $userCount = User::count();
        $visitorCount = DB::table('visitors')->count();
        $articles = Article::orderBy('created_at','desc')->paginate('7');

        // Fetch the latest verified ad
        $sponsors = Ad::where('verified', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('home.index', compact('projects','sponsors','userCount','visitorCount','articles'));
    }
}
