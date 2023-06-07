<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/dist/output.css" rel="stylesheet">
        @vite('resources/css/app.css')

        <title>{{$title}}</title>

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
        <div class="container mx-auto">
            <header>
                <div id="hamburger-menu" class="hidden bg-blue-900 w-full h-screen p-5">
                    <img src="./pictures/close.png" onclick="closeSideMenu()"/>
                    <ul class="text-white p-10 w-full">
                        <li class="p-2 border-b border-white">Latest</li>
                        <li class="p-2 border-b border-white">Popular</li>
                        <li id="categories-listItem" class="p-2" onclick="displayCategories('categories-listItem', 'hamburger')">Categories <img id="arrow" src="./pictures/arrow-down.png" class="float-right" onclick="rotateIcon()"/></li>
                    </ul>
            </div>
                <div id="hamburger" class="hidden p-2 max-[1023px]:flex" onclick="displayHumburgerMenu()">
                    <div class="mt-2">
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                        <div class="w-7 border-b border-blue-900 m-2"></div>
                    </div>
                    <div class="w-48 h-24">
                        <img src="{{asset('/pictures/logo.jpeg')}}"/>
                    </div>
                </div>

                <div class="w-1/3 h-max mt-4 hidden mx-auto lg:block">
                    <img src="{{asset('/pictures/logo.jpeg')}}"/>
                </div>
      
                <nav id="nav" class="mt:20 text-blue-900 border-b border-blue-900">
                    <ul class="list-none cursor-pointer flex flex-row overflow-x-auto">
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded">Latest</li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded">Popular</li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded"><a href="/studying">Studying</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded"><a href="/coding">Coding</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded"><a href="/presentations">Presentations</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded whitespace-nowrap"><a href="/entertainment">Entertainment</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded whitespace-nowrap"><a href="/content-creators">Content Creators</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded whitespace-nowrap"><a href="/editing-and-design">Editing and Designs</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded whitespace-nowrap"><a href="/business">Business</a></li>
                        <li class="p-2 hover:text-white hover:bg-blue-900 hover:rounded whitespace-nowrap"><a href="/dubbing-and-subtitling">Dubbing and Subtitling</a></li>
                    </ul>
                </nav>
            </header>
            <div id="content" class="p-4"> 
                @yield('content')
            </div>

            <div class="w-24 h-24 float-right">
                <img src="./pictures/small-logo.jpeg"/>
            </div>
        </div>
    </body>
</html>

<script src={{asset('js/main.js')}}></script>