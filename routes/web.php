<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\UserController;

Route::view('/', 'index');

// お問い合わせフォーム
Route::get('/contact', [ContactController::class, "index"])->name("contact");
Route::post('/contact', [ContactController::class, "sendMail"]);
Route::get('/contact/complete', [ContactController::class, "complete"])->name("contact.complete");


// ブログ
Route::get('/admin/blogs', [AdminBlogController::class, "index"])->name("admin.blogs.index");
Route::get('/admin/blogs/create', [AdminBlogController::class, "create"]);
Route::post('/admin/blogs', [AdminBlogController::class, "store"])->name("admin.blogs.store");

Route::get('/admin/blogs/{blog}', [AdminBlogController::class, "edit"])->name("admin.blogs.edit");
Route::put('/admin/blogs/{blog}', [AdminBlogController::class, "update"])->name("admin.blogs.update");
Route::delete('/admin/blogs/{blog}', [AdminBlogController::class, "destroy"])->name("admin.blogs.destroy");


// ユーザー管理
Route::get('/admin/users/create', [UserController::class, "create"])->name("admin.users.create");
Route::post('/admin/users', [UserController::class, "store"])->name("admin.users.store");

