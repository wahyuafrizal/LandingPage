<!DOCTYPE html>
><html>
    <head>
        @include('include.meta')

        <title>@yield('title') | Landing Page </title>
        <!-- favicon -->
        <link rel="apple-touch-icon" href="">
        <link rel="shortcut-icon" href="">

        @stack('before-style')
        <!-- style -->
        @include('include.style')
        
        @stack('after.style')
    </head>

    <body>

    @include('include.header')
        @yield('content')
    @include('include.footer')

    @stack('before-script')
        <!-- style -->
        @include('include.script')
        
        @stack('after.script')
    </body>
</html>