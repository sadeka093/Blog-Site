<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/*use App\Http\Controllers\Auth;*/
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
	public function index()
    {
    	// Fetch all blogs from the database
        $blogs = Blog::all();
/*if (Auth::check()) {
            // Get the authenticated user's ID
            $userId = Auth::id();

            // Now you can use $userId as needed, such as storing it in the database, etc.
            
 }*/           // For example, if you want to dump it:
            //dd($userId);
        // Pass the fetched blogs to the view
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
    	return view('blogs.create');
    }

    public function store(Request $request)
    {
    	//dd($request);
        // Validate the incoming request data
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size 2MB
        ]);
//dd($request);
        // Store the validated data in the database
        $blog = new Blog();
        $blog->blog_title = $request->input('blog_title');
        $blog->blog_details = $request->input('blog_details');
        $blog->user_id = Auth::id() ?? null;

        // Upload and save the image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
            $blog->image = $imagePath;
        }

        // Save the blog post
        $blog->save();

        // Redirect back with success message
        return redirect()->route('blogs.index')->with('success', 'Blog post created successfully.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.details', compact('blog'));
    }

    public function edit(Blog $blog)
    {
       // $this->authorize('update', Blog::class);

        return view('blogs.edit', compact('blog'));
    }
    public function update(Request $request, Blog $blog)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_details' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size 2MB
        ]);
        //dd($validatedData);
        // Update the blog with the validated data
        //dd($blog);
       // $blog->update($validatedData);
        $blog->update([
            'blog_title' => $request->blog_title,
            'blog_details' => $request->blog_details,
            'blog->user_id' => Auth::id() ?? null,
        ]);

        // Redirect back or to a specific route
        return redirect()->route('blogs.index', $blog)->with('success', 'Blog post Updated successfully.');
    }

    public function destroy(Blog $blog)
    {
       // dd($blog);
        // Check if the authenticated user is authorized to delete the blog
        //$this->authorize('delete', $blog);

        // Delete the blog post
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
