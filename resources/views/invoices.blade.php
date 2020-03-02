@extends('layouts.app')

@section('content')
<table class="bg-gray-100 w-full">
    @foreach (App\Invoice::all() as  $invoice)
        <tr class="border-b">
            <td class="p-4">
                <div>
                    <span class="font-medium">{{ $invoice->title }}</span>
                    @if ($invoice->paid_at) <span class="ml-2 bg-gray-300 font-semibold p-1 rounded text-gray-600 text-sm">Paid</span> @endif
                </div>
            </td>
            <td class="p-4 text-right font-mono font-semibold">
                <span>{{ money($invoice->amount_in_cents) }}</span>
            </td>
            <td class="p-4 text-right">
                <span class="text-blue-600">Download</span>
            </td>
        </tr>
    @endforeach
</table>
@endsection
