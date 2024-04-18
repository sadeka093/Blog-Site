<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'figtree', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #CBC2C0;
            }

            .cta-button {
                margin-top: 20px;
                margin-right: : 20px;
            }
            .cta-button .btn {
                margin-right: 20px; /* Add margin-right to the first button */
            }
    /*        .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }*/
            .customized{
                display: flex;

            }
            .hero-section {
                background-size: cover;
                background-position: center;
                height: 100px;
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

        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="">
            @include('layouts.navigation')

            <!-- Page Heading -->
<!--             @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
 -->
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
