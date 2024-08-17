<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>['auth']],function(){
    Route::resource('posts', PostController::class)->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy',
    ]);
    // Route::resource('posts',PostController::class);
    //Route::resource('photos',PhotoController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::prefix('admin')->group(function () {
    // Admin-facing user management routes with custom names
    Route::resource('users', AdminUserController::class)->names([
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'show' => 'admin.users.show',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);

    // Admin-facing post management routes with custom names
    Route::resource('posts', AdminPostController::class)->names([
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'show' => 'admin.posts.show',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]);
});


// Route::prefix('admin')->middleware('admin')->group(function(){
//     Route::resource('users',AdminUserController::class);
//     Route::resource('posts',AdminPostController::class);
// });



// Route::prefix('admin')->group(function(){
//     Route::resource('users',AdminUserController::class);
//     Route::resource('posts',AdminPostController::class);
// });


Auth::routes();



