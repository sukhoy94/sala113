<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sala113')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">


    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #bbaa92;
        }
    </style>
</head>

<body>
<!-- Navbar -->
@include('partials.navbar')

<!-- Main Content -->
<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-light text-center py-3">
    <div class="container">
        <p class="mb-0">
            contact@dusha-fund.com |
            <a href="https://www.instagram.com/sala113_lublin/" target="_blank" class="text-dark">Instagram</a>
        </p>
        <p>
            <a href="{{ route('privacy') }}">
                {{ __('privacy.title') }}
            </a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
