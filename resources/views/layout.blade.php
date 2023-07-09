<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>😒@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{url('css\tailwind.css')}}" rel="stylesheet" />
    <script src="{{url('js\tailwind.js')}}"></script>
</head>

<body class="antialiased">
    <nav class="flex justify-between items-center">
        <div class="flex relative py-4 px-6 gap-10 ml-2">
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.abute')}}">About</a>
            <a href="{{route('computers.index')}}">Computers</a>
        </div>
        <div class="mr-8">
            <!-- in index -->
            @yield('Create')
        </div>
    </nav>
    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white p-3 text-xl">

        <div class="max-w-7xl mx-auto p-6 lg:p-8 mb-8  w-2/6">

            <div class="flex justify-center items-center gap-8">
                <h1 class="text-4xl">@yield('title')</h1>
            </div>

            <div class="mt-12">
                @yield('cnotent')
            </div>
        </div>
    </div>
</body>

</html>