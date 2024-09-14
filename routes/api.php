<?php

//use App\Http\Controllers\PostController;

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/user',[UserController::class,'index'] );//->middleware('auth:sanctum');

Route::get('/posts',[PostController::class,'index'] );

Route::get('/posts/{id}', [PostController::class, 'getPost']);