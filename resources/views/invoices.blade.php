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
                <table class="bg-gray-100 w-full">
                    @foreach ($invoices as  $invoice)
                        <tr class="border-b hover:bg-gray-200 last:border-b-0">
                            <td class="p-4">
                                <span class="font-medium">{{ $invoice->title }}</span>
                                @if ($invoice->paid_at) <span class="ml-2 bg-gray-300 font-semibold p-1 rounded text-gray-600 text-sm">Paid</span> @endif
                            </td>
                            <td class="p-4 text-right font-mono font-semibold">{{ money($invoice->amount_in_cents) }}</td>
                            <td class="p-4 text-right"><a href="#" class="text-blue-600">Download</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
