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
        <a href="/content">Contact</a>
    </nav>
    <div
        class="relative sm:flex sm:justify-center min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white p-3 text-xl">

        <div class="max-w-7xl mx-auto p-6 lg:p-8 mb-8">

            <div class="flex justify-center">
                <h1 class="text-4xl">Abute</h1>
            </div>

            <div class="mt-12 ">
                <div>
                    <ui class="flex flex-col justify-center my-7 gap-3">
                        <a href="http://127.0.0.1:8000/computres/4" class="hover:text-fuchsia-600">
                            <li class="p-3 border-4 rounded-xl text-xl list-none">
                                <strong>Samsung</strong> from <strong>KOR</strong> <span class="">95$</span>
                            </li>
                        </a>
                    </ui>
                </div>
            </div>
        </div>

    </div>


    <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div><iframe
        id="nr-ext-rsicon"
        style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe>
</body>

</html>