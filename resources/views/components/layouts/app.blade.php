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

<body class="antialiased font-sans bg-red-500 flex flex-col min-h-screen">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show absolute self-end m-3 right-0" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <nav class="bg-primary px-4 text-white font-bold h-16 flex items-center">
        My Dental System
    </nav>

    <div class="d-flex flex-1">
        <livewire:sidebar />
        <main class="p-3 bg-gray-100 w-full">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    @livewireChartsScripts
</body>

</html>