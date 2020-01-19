<div class="absolute inset-0" style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(rgb(203, 213, 224)));"></div>

<table class="bg-gray-100 w-full">
    @foreach(collect()->times(10)->map(function () { return rand(10, 20); }) as $invoiceTitleCharacterCount)
        <tr class="border-b hover:bg-gray-200 last:border-b-0">
            <td class="p-4">
                <span class="bg-gray-300 font-medium text-transparent rounded">
                    {{ join(range(1, $invoiceTitleCharacterCount)) }}
                </span>
            </td>
            <td class="p-4 text-right font-mono font-semibold"><div class="bg-gray-300 text-transparent rounded">$125.50</div></td>
            <td class="p-4 text-right"><a href="#" class="text-blue-600"><div class="bg-gray-300 text-transparent rounded">Download</div></a></td>
        </tr>
    @endforeach
</table>
