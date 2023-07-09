<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>😒🏠</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="css\tailwind.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <nav class="flex relative py-4 px-6 gap-10">
        <a href="/">Home</a>
        <a href="/abute">About</a>
        <a href="/computers">Computers</a>
    </nav>
    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white p-3 text-xl">

        <div class="max-w-7xl mx-auto p-6 lg:p-8 mb-8">

            <div class="flex justify-center">
                <h1 class="text-4xl">Computres</h1>
            </div>

            <div class="mt-12 ">
                <h3>this is a home page</h3>
            </div>
        </div>
    </div>
</body>

</html>