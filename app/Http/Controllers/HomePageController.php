<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
class HomePageController extends Controller
{
	public function index()
    {
        	// Fetch all blogs from the database
        $blogs = Blog::take(3)->get();

        // Pass the fetched blogs to the view
        return view('first', compact('blogs'));
    }
}

