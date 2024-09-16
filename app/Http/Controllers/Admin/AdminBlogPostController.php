<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminBlogPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {   
        //dd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'nullable',
            'is_published' => 'nullable|boolean',
            'published_at' => 'nullable|date',
            'featured_image' => 'nullable|image|max:2048',
            'meta_data' => 'nullable|string',

        ]);
        //dd(gettype($validatedData['meta_data']));
        /*'excerpt' => 'nullable',
        'is_published' => 'boolean',
        'published_at' => 'nullable|date',
        'featured_image' => 'nullable|image|max:2048',
        'meta_data' => 'nullable|json',
        */
    
        //dd($data);
        $jsonString2 = $validatedData['meta_data'];
        $metaData = json_decode($jsonString2, true);
        dd($metaData);



        //dd(json_decode($validatedData['meta_data'])); 
        $metaData = $validatedData['meta_data'] ? json_decode($validatedData['meta_data'], true) : null;
        
        //dd($metaData);
        $validatedData['meta_data'] = $metaData;
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $validatedData['user_id'] = Auth::id();

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('featured_images', 'public');
            $validatedData['featured_image'] = $path;
        }

        BlogPost::create($validatedData);

        dd("done");

       // return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(BlogPost $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, BlogPost $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'excerpt' => 'nullable',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'featured_image' => 'nullable|image|max:2048',
            'meta_data' => 'nullable|json',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('featured_images', 'public');
            $validatedData['featured_image'] = $path;
        }

        $post->update($validatedData);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
