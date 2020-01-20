<div class="absolute inset-0" style=" background-image: linear-gradient(0deg, #cbd5e0, transparent); "></div>

<table class="bg-gray-100 w-full">
    @foreach (range(1, 10) as  $invoice)
        <tr class="border-b">
            <td class="p-4">
                <span class="bg-gray-300 text-transparent rounded">{{ str_repeat('_', rand(10, 30)) }}</span>
            </td>
            <td class="p-4">
                <div class="bg-gray-300 text-transparent rounded">$123.45</div>
            </td>
            <td class="p-4">
                <div class="bg-gray-300 text-transparent rounded">Download</div>
            </td>
        </tr>
    @endforeach
</table>
