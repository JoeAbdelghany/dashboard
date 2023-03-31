<html lang="en">
    <head>
        @include('layout.head.index')
    </head>
    <body>
        @include('layout.header.index')
        <main>
            @include('layout.aside.index')
            <main>
                @yield('content')
            </main>
        </main>
        @include('layout.footer.index')
    </body>
</html>
