<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard | {{ config('app.name')  }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />

    </head>
    <body class="text-gray-700 bg-white text-center" style="font-family: 'Source Sans Pro', sans-serif">
        <nav class="bg-gray-800 p-2 mt-0 fixed w-full z-10 top-0">
            <div class="container mx-auto px-6  flex justify-between items-center">
                <a class="font-bold text-2xl lg:text-4xl text-gray-300 hover:text-white" href="/">
                    <img src="/logo.svg" alt="{{ config('app.name') }}" style="width: 35px">
                </a>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:block">
                    <ul class="inline-flex">
                        <li>
                            <a class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="{{ route('login') }}" >Login</a>
                        </li>
                        <li><a class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="https://github.com/abdulwahhabkhan" target="_blank">Github</a></li>
                        {{--<li><a class="px-4 hover:text-gray-800" href="#">Contact</a></li>--}}
                    </ul>
                </div>
            </div>
        </nav>
        <div class="min-h-screen flex items-center justify-center bg-gray-100"
        >
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-2 text-dark">
                    Welcome to {{ config('app.name') }}
                </h2>
                <h3 class="text-2xl mb-8 text-gray-700">
                    Laravel Scantum based API with subdomain based front end e.g. React
                </h3>

                <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
                    Get Started
                </button>
            </div>
        </div>


    </body>

    {{--<body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1 class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-gray-900 dark:text-white">
                    Welcome to {{ config("app.name") }}
                </h1>

            </div>
        </div>
    </body>--}}
</html>
