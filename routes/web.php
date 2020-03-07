<?php

Route::view('/invoices', 'invoices');
Route::view('/profile', 'profile');
Route::view('/account', 'account');

Route::redirect('/profile', '/account');
