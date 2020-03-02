<?php

Route::redirect('/', '/invoices');

Route::view('/invoices', 'invoices');
Route::view('/profile', 'profile');
Route::view('/account', 'account');
