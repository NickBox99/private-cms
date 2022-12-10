<?php

use App\Http\Controllers\WebStorageOrdersController;
use App\Http\Controllers\WebStorageTagsController;

Route::view('/', 'index')->name('test');

Route::prefix('web-storage')->name('web-storage-')->group(function () { 
    Route::resource('orders', WebStorageOrdersController::class);
    Route::resource('tags', WebStorageTagsController::class);
 });
