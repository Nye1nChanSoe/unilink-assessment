<?php

use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\BlogPostController;
use App\Http\Controllers\Api\V1\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'server' => 'api',
        'framework' => 'Laravel',
        'version' => app()->version(),
    ]);
});
Route::get('v1/', function () {
    return response()->json([
        'status' => 'ok',
        'api-version' => 'v1'
    ]);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('blog-posts', BlogPostController::class);
    Route::apiResource('authors', AuthorController::class);
    Route::apiResource('tags', TagController::class);
});