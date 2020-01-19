<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-400 py-24">
        <div class="mx-auto w-1/2">
            <ul class="-ml-32 absolute w-32">
                <li class="font-bold mb-1 text-gray-800">Invoices</li>
                <li class="font-medium mb-1 text-gray-700">Profile</li>
                <li class="font-medium mb-1 text-gray-700">Account</li>
                <li class="font-medium mb-1 text-gray-700">Log Out</li>
            </ul>

            <div class="relative rounded overflow-hidden">
                @if ($cachedInvoicesPartial)
                    {!! $cachedInvoicesPartial !!}
                @else
                    <div id="js-invoices-partial-target">
                        @include('_invoices-placeholder')
                    </div>

                    <script>
                        fetch('/partials/invoices')
                            .then(response => response.text())
                            .then(html => {
                                document.querySelector('#js-invoices-partial-target').innerHTML = html
                            })
                    </script>
                @endif
            </div>
        </div>
    </body>
</html>
