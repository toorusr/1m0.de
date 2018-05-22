<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/styles.css">
        @if ($page->getPath() != '/404')
            <title> 1m0 | @yield('title')</title>
        @else
            <title> 1m0 | 404 </title>
        @endif
    </head>
    <body>
        @include('_partials.navbar')
        <main>
            @yield('body')
        </main>
        @include('_partials.footer')
    </body>
</html>
