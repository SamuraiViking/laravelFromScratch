<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','PrepNetwork')</title>
    </head>
    <body>
        <ul>
            <li><a href="/contact">contact</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/">home</a></li>
        </ul>
        @yield('content')
    </body>
</html>