<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{route('about')}}">about</a>
            <a href="{{route('contact')}}">contact</a>
            <a href="{{route('news')}}">news</a>
            <a href="{{route('profile')}}">profile</a>
            <a href="{{route('project')}}">project</a>
        </nav>
    </header>
    @yield('content')
</body>
</html>