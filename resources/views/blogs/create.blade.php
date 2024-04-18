<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #CBC2C0;

        }
/*        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            font-size: 24px;
        }*/
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
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
        .card {
            width: 100%;
            max-width: 700px;
            border: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #882812;
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 50px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 10px; /* Add margin bottom */
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px; /* Add margin bottom */
        }
        .btn-primary {
            background-color: #3B6ADF;
            border-color: #007bff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background-color: #007bff;
            border-color: #007bff;
        }
        .top-buttons {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- <div class="container"> -->
<!--         <div class="top-buttons">
            <a href="{{ route('homepage') }}" class="btn btn-primary">Home</a>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="" class="btn btn-primary">Blogs</a>
        </div> -->
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
                </nav>
            @endif
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Create New Blog Post</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="blog_title">Blog Title</label>
                                    <input id="blog_title" type="text" class="form-control" name="blog_title" value="{{ old('blog_title') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="blog_details">Blog Details</label>
                                    <textarea id="blog_details" class="form-control" name="blog_details" rows="5" required>{{ old('blog_details') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="image" type="file" class="form-control" name="image">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    <!-- </div> -->
</body>
</html>
