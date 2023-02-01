<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
//
//Route::get('articles', function () {
//    return Article::all();
//});
//
//Route::get('articles/{id}', function ($id) {
//    return Article::find($id);
//});
//
//Route::post('articles', function (Request $request) {
//    return Article::create($request->all());
//});
//
//Route::put('articles/{id}', function (Request $request, $id) {
//    dd($id);
//    $article = Article::find($id);
//    $article->update($request->all());
//    return response()->json(['status' => 200, 'message' => 'Success!', 'data' => $article]);
//});
//
//Route::delete('articles/{id}', function ($id) {
//    Article::find($id)->delete();
//    return response()->json(['status' => 200, 'message' => 'Article deleted']);
//});

    Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('articles/{article}', [ArticleController::class, 'delete'])->name('articles.delete');
