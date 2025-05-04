<?php

use Illuminate\Support\Facades\Route;
use Webkul\Blog\Http\Controllers\Shop\PostController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'blog'], function () {
    Route::get('', [PostController::class, 'index'])->name('shop.blog.index');
});
