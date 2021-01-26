<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src=" {{ asset('js/app.js') }} " defer></script>
        <script src=" {{ asset('js/xtra.js') }} " defer></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">

            <!-- Page Heading -->
            <header style="" class="flex flex-col shadow bg-gray-200">
                <div class="flex flex-row justify-between px-3">
                    <div class="">
                        <h1 class="text-purple-700 font-bold text-2xl"><a href=" {{ route('post.home')}} ">Voyage</a>r</h1>
                    </div>
                </div>
    
                <div class="mt-15 lg:hidden">
                        <button id="hambuger" class="float-right mb-1 relative cursor-pointer">Hambuger</button>

                        <div id="mobileNav" class="w-full hidden transition duration-500 ease-in-out bg-gray-700 shadow-lg mt-2 relative z-20 text-white flex flex-col ">
                            <a 
                                href="{{ route('post.home') }}" 
                                class="pb-2 pt-4 pl-15 font-semibold hover:bg-gray-400 transition duration-500 ease-in-out"
                            >Posts</a>
                            <a href="{{ route('category.index') }}" class="py-2 pl-15 font-semibold hover:bg-gray-400 transition duration-500 ease-in-out">Categories</a>
                            <a href="" class="py-2 pl-15 font-semibold hover:bg-gray-400 transition duration-500 ease-in-out">Menu</a>
                            <a href="" class="pt-2 pb-4 pl-15 font-semibold hover:bg-gray-400 transition duration-500 ease-in-out">Others</a>
                        </div>
                </div>
            </header>

            <!-- Page Content -->
            <main id="app">
                @yield('content')
            </main>
        </div>

        <footer class="flex flex-col justify-center items-center h-20 py-10 bg-green-700 text-white font-bold">
            {{ date('Y')}}
        </footer>

    </body>
</html>
