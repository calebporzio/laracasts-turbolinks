<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://unpkg.com/turbolinks"></script>
    </head>
    <body class="bg-gray-400 py-24">
        <div class="mx-auto w-1/2">
            @include('_navigation')

            <div class="relative rounded overflow-hidden">
                @yield('content')
            </div>
       </div>
    </body>
</html>
