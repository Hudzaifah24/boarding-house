<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.header')
    </head>
    <body>
        @include('includes.navbar-auth')

        @yield('content')

        @stack('script')
    </body>
</html>
