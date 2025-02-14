<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;

Route::get('/', function () {
    echo 'Home';
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin',
], function() {
    // Index
    Route::get('/', [IndexController::class, 'index'])->name('index');

    // Category
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.'
    ], function () {
        Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');
    });
});
