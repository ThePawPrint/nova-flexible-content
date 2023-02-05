<?php

use Illuminate\Support\Facades\Route;
use Whitecube\NovaFlexibleContent\Http\Controllers\ViewController;

Route::post(
    'view/{resource}/{resourceId}/{fieldName}/{layoutName}',
    ViewController::class
)->name('view');

Route::get(
    'view/{resource}/{resourceId}/{fieldName}/{layoutName}',
    ViewController::class
)->name('view');
