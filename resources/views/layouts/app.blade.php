<!-- resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>@yield('title') | xyz.com</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body>
        <div id="header">
            <h1>Website xyz.com</h1>
        </div>
        @include('layouts.menu')
        <div id="content">
            <div class="isi">
            @yield('content')
            </div>
        </div>
        <div id="footer">
            <p>Copyright 2022</p>
        </div>
        @stack('js')
    </body>
</html>