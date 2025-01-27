<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body style="font-family: 'Playfair Display';">
    <nav class="flex justify-between fixed w-full top- overflow-x-hidden z-50 bg-white">
        <h1 class=" pt-6 ps-6 font-bold text-xl ">Tour</h1>
        <div class="links py-5 flex items-center px-5">
            <a href="{{ route('home') }}" class="px-2">Home</a>
            <a href="{{ route('about') }}" class="px-2">About</a>
            <a href="{{ route('packages') }}" class="px-2">Packages</a>
            @if (Auth::user())
                @if (Auth::user()->image)                    
                <a href="{{ route('profile') }}"><div class="image w-8 h-8 bg-cover bg-center bg-no-repeat border-2 rounded-full mx-3" style="background-image: url('/storage/{{ Auth::user()->image }}')"></div></a>
                @else
                <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" class="text-xl fill-black hover:scale-75 duration-300 ease-out mx-3" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com --><path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/></svg></a>
                @endif
            @else
                <a href="{{ route('login') }}">Login</a>
            @endif
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="w-full h-96 bg-black text-white px-20 py-10">
        <div class="content flex">
            <div class="">
                <h1 class="text-4xl font-bold">TOUR </h1>
                <p>The Best Traveling Experience In Bali</p>
            </div>
        </div>
        <h3 class="text-center opacity-50 m-0 p-0">Copyright 2023 @ Ryananta Danendra, All right reserved</h3>
    </footer>
</body>
</html>