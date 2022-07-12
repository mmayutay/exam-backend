<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('return-list-products', [ProductController::class, 'returnAllProducts']);

Route::post('product/add', [ProductController::class, 'addNewProduct']);

Route::get('product/delete/{id}', [ProductController::class, 'deleteSelectedItem']);

Route::Get('product/get-selected-item/{id}', [ProductController::class, 'getSelectedItem']);

Route::post('product/update', [ProductController::class, 'updateSelectedItem']);
