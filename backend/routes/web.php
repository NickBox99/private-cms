<?php

use App\Http\Controllers\WebStorageOrdersController;

Route::get('/', function() {
    return view('index');
});

Route::resource('web-storage/orders', WebStorageOrdersController::class);