<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Site</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #CBC2C0;
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
        nav {
            display: flex;
            justify-content: center;
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
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /*height: 150vh;*/

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
    </style>
</head>
<body>
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 gap-2 py-10 lg:grid-cols-3">
               
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        <a href="{{ route('homepage') }}" class=""> Home </a>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="ml-4"> My_Control_Page </a>
                        @else
                            <a href="{{ route('login') }}" class=""> Log in </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class=""> Register </a>
                            @endif
                        @endauth
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blogs</a>
                    </nav>
                @endif
            </header>
        </div>
<!--         <div class="hero-section">
            <div>
                <div class="cta-button" style="padding-right: 20px">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blogs</a>
                </div>
            </div>
        </div> -->
    <!-- Blog Section -->
    <div class=" mt-5">
        <div class="card mb-3">
            <h1>See details here</h1>
            <!-- <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h2 class="card-title">{{ $blog->blog_title }}</h2>
                <img src="{{ asset($blog->image) }}" class="card-img-top" alt="Blog Image">
                <p class="card-text">{{ $blog->blog_details }}</p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
