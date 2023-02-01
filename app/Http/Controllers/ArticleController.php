<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): Collection
    {
        return Article::all();
    }

    public function show(Article $article): Article
    {
        return $article;
    }

    public function store(Request $request): JsonResponse
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
//        dd($request->all());
        $article = Article::find($id);
        $article->update($request->all());
        return response()->json(['status' => 200, 'message' => 'Success!', 'data' => $article]);
    }

    public function delete(Article $article): JsonResponse
    {
        $article->delete();
        return response()->json(['status' => 200, 'message' => 'Article deleted']);
    }
}
