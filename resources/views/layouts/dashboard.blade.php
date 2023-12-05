<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
</head>
<body>
    @include('components.sidebar')

    <main>
        <img src="{{ asset('image/hamburger.svg') }}" alt="hamburger" class="hamburger" width="30px" id="hamburger-icon">
        <h1>@yield('title')</h1>
        @yield('content')
    </main>

    <script src="{{ asset('js/dashboard/script.js') }}"></script>
</body>
</html>
