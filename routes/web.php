<?php

Route::get('/', function () {
    return view('invoices', [
        'invoices' => App\Invoice::all(),
    ]);
});
