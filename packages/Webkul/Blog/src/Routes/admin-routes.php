<?php

use Illuminate\Support\Facades\Route;
use Webkul\Blog\Http\Controllers\Admin\PostController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/blog'], function () {
    Route::controller(PostController::class)->group(function () {
        Route::get('', 'index')->name('admin.blog.index');
    });
});
