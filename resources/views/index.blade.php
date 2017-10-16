<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        @include('templates.header')
    </head>
    <body>
        @include('layouts.nav')
        
        @yield('admin')
        @yield('page_content')
        
        @include('templates.footer')
    </body>
</html>