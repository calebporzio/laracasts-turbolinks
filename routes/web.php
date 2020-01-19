<?php

use Carbon\Carbon;

Route::get('/', function () {
    return view('invoices', [
        'cachedInvoicesPartial' => Cache::get('partials.invoices'),
    ]);
});

Route::get('/partials/invoices', function () {
    return Cache::remember('partials.invoices', Carbon::parse('10 seconds'), function () {
        return view('_invoices', [
            'invoices' => App\Invoice::all(),
        ])->render();
    });
});
