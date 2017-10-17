<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        @include('layouts.templates.header')
    </head>
    <body>
        @include('layouts.templates.nav')
        
        @yield('content')
        <!--@yield('layouts.web.page_content')-->
        
        @include('layouts.templates.footer')
    </body>
</html>