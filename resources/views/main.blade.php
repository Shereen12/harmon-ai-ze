<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/dist/output.css" rel="stylesheet">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@600&family=Lato:ital,wght@0,300;1,100;1,300;1,700&family=Oswald:wght@200;700&display=swap" rel="stylesheet">    <body>
        <div class="container mx-auto">
            <header>
                <div id="hamburger" class="hidden p-2 max-[768px]:flex" onclick="displayHumburgerMenu()">
                    <div class="mt-2">
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                    </div>
                    <div class="w-48 h-24">
                        <img src="{{asset('/pictures/logo.jpeg')}}"/>
                    </div>
                </div>

                <div class="w-96 h-24 mt-4 hidden mx-auto lg:block">
                    <img src="{{asset('/pictures/logo.jpeg')}}"/>
                </div>
      
                <nav id="nav" class="hidden mt:20 text-blue-900 border-b border-blue-900 lg:block">
                    <ul class="list-none cursor-pointer flex flex-row">
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded">Latest</li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded">Popular</li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded" id="nav-categories"  onmouseleave="hideCategories()" onmouseover="displayCategories('nav-categories', 'nav')">Categories</li>
                    </ul>
                </nav>
            </header>
            <div class="p-4"> 
                @yield('content')
            </div>
        </div>
    </body>
</html>

<script src={{asset('js/main.js')}}></script>