<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #CBC2C0;
        }
/*        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }*/
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /*height: 150vh;*/
            margin: auto;
            padding: 20px;

        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 10px 20px 10px 20px;
            border-radius: 5px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #4F87E8;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #f0f0f0;
        }

        .cta-button {
            margin-top: 20px;
            margin-right: : 20px;
        }
        .cta-button .btn {
            margin-right: 20px; /* Add margin-right to the first button */
        }

        .hero-section {
/*            background-image: url('https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');*/
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            font-size: 24px;
        }
        .hero-section .btn-primary {
            background-color: #3B6ADF;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            margin-top: 10px;
            color: white;
            text-decoration: none;
        }
        .hero-section .btn-primary:hover {
            background-color: #007bff;
            border-color: #007bff;
        }



        .card {
/*            width: 100%;
            max-width: 700px;*/
            border: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; 
        }
        .card-header {
            background-color: #882812;
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            /*padding: 10px;*/
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .card a{
            background-color: #3B6ADF;
            border-color: #007bff;
            border-radius: 5px;
            padding: 3px 7px;
            font-size: 1rem;
            margin-top: 10px;
            color: white;
            text-decoration: none;
        }

    </style>
        
    </head>
    <body class="">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 gap-2 py-10 lg:grid-cols-3">
               
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        <a href="{{ route('homepage') }}" class=""> Home </a>
                        @auth
                            <a href="{{ url('/dashboard') }}" class=""> My Control Page </a>
                        @else
                            <a href="{{ route('login') }}" class=""> Log in </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class=""> Register </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
        </div>
        <div class="hero-section">
            <div>
                <p>Start sharing your thoughts with the world</p>
                <div class="cta-button" style="padding-right: 20px">
                    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Read Blogs</a>
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blogs</a>
                </div>
            </div>
        </div>
        <!-- Blog Section -->
        <div class="container mt-5">
            <h2>Check All Blogs Here</h2>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <!-- <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->blog_title }}</h5>
                            <p class="card-text">{{ $blog->blog_details }}</p>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary" style="background-color:green">Read More</a>
                            @can('update', $blog)
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit blog</a>
                            @endcan
<!--                             @can('delete', $blog)
                            <a href="{{ route('blogs.destroy', $blog->id) }}" class="btn btn-primary">Delete blog</a>
                            @endcan -->
                            <div class="row"></div>
                            @can('delete', $blog)
                            <!-- <div style="ml-4"> -->
                                <form action="{{ route('blogs.destroy', $blog) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="            background-color: #D35B3E;
                                                        border-color: #D35B3E;
                                                        border-radius: 5px;
                                                        padding: 3px 7px;
                                                        font-size: 1rem;
                                                        margin-top: 10px;
                                                        color: white;
                                                        text-decoration: none; ">Delete</button>
                                </form>
                            <!-- </div> -->
                            @endcan

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
