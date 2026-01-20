<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" />
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">

    <!-- Sidebar -->
    <x-sidebar />

    <!-- Content -->
    <main class="ml-64 p-6 min-h-screen">
        @yield('content')
    </main>

    @yield('scripts')
</body>

</html>
