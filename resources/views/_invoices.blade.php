<table class="bg-gray-100 w-full">
    @foreach ($invoices as  $invoice)
        <tr class="border-b hover:bg-gray-200 last:border-b-0">
            <td class="p-4">
                <span class="font-medium">{{ $invoice->title }}</span>
                @if ($invoice->paid_at) <span class="ml-2 bg-gray-300 font-semibold p-1 rounded text-gray-600 text-sm">Paid</span> @endif
            </td>
            <td class="p-4 text-right font-mono font-semibold">{{ $invoice->amount_for_humans }}</td>
            <td class="p-4 text-right"><a href="#" class="text-blue-600">Download</a></td>
        </tr>
    @endforeach
</table>
