<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('nadpis')

    <div class="navbar" id="Navbar">
        @if (!Auth::check())
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register-user')}}">Registrácia</a>
        @endif
        <a href="{{route('vrcholy-page')}}">Vrcholy</a>
        <a href="{{route('krivan-page')}}">Kriváň</a>
        <a href="{{route('dumbier-page')}}">Ďumbier</a>
        @if (Auth::check())
        <a href="{{route('signout')}}">Logout</a>
        @endif
    </div>

    @yield('content')
</body>
</html>