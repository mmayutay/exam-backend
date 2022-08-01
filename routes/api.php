<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use \App\Http\Controllers\ForCreatingPost;
use \App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// One to One Relationship
Route::get('post/get-user/{id}', [ProductController::class, 'returnPosts']);

//One TO Many Relationship
Route::get('post/get-all-posts-of-user/{id}', [ProductController::class, 'returnRelatedPosts']);

//Controller ProductsController.php
Route::get('return-list-products', [ProductsController::class, 'index']);

Route::post('product/add', [ProductsController::class, 'store']);

Route::get('product/delete/{id}', [ProductsController::class, 'destroy']);

Route::get('product/get-selected-item/{id}', [ProductsController::class, 'show']);

Route::post('product/update', [ProductsController::class, 'update']);

//Controller CategoryController.php
Route::get('return-all-categories', [CategoryController::class, 'index']);

//Controller ProductController.php

Route::get('product/retrieve-deleted', [ProductController::class, 'returnDeletedFunction']);

Route::get('product/restore-deleted-data/{id}', [ProductController::class, 'restoreDeletedFunction']);

Route::get('product/delete-item-permanently/{id}', [ProductController::class, 'deleteItemPermanently']);


//Controller ForCreatingPost.php
Route::get('post/get/{id}', [ForCreatingPost::class, 'show']);
