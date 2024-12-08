<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans min-h-screen">
    <section class="min-h-screen w-full flex items-center justify-center">
        <div class="flex flex-col gap-3 items-center justify-center">
            <h1 class="font-bold text-5xl text-blue-500">BOOK AN APPOINTMENT NOW</h1>
            <a href="/login" class="px-3 py-1 text-xl rounded-lg shadow-lg font-bold text-blue-500">Click Here To Start</a>
        </div>

    </section>

    @livewireScripts
</body>mn

</html>