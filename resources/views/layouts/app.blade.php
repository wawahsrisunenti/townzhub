<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Discover innovative digital solutions with DCLIQ. We focus on empowering your business transformation with effective digital marketing strategies, creative design, web development, and SEO development. Join us to unlock your business's potential and achieve greater success!">
        <meta name="keywords" content="digital agency, digital marketing agency, business transformation, digital marketing, creative design, technology development, branding solutions, online strategy, digital solutions, business empowerment, marketing consultancy, SEO">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="@yield('title', config('app.name'))">
        <meta property="og:description" content="Discover innovative digital solutions with DCLIQ.">
        <meta property="og:image" content="{{asset('asset/template/wp-content/uploads/2023/07/1726556093_header.png')}}"> 
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:type" content="website">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
