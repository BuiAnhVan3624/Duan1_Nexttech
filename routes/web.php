<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Models\Category;

Route::get('/', function () {
    echo 'Home';
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function() {
    // Index
    Route::get('/', [IndexController::class, 'index'])->name('index');

    // Category
    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.'
    ], function () {
        Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');
        Route::get('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
        Route::post('add-category', [CategoryController::class, 'addPostCategory'])->name('addPostCategory');
        Route::get('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::put('update-category/{id}', [CategoryController::class, 'updatePutCategory'])->name('updatePutCategory');
        Route::delete('delete-category', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
    });
});
