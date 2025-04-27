<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten halaman --}}
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layouts.footer')

    @vite('resources/js/app.js')
</body>

</html>
