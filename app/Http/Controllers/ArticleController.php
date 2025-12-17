<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('pages.article-details', ['article' => $article]);
    }

    public function create()
    {
        Article::upsert([
            ['title' => 'L’IA soigne mieux', 'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'],
            ['title' => 'Villes vertes', 'description' => 'Les métropoles deviennent plus écologiques et durables.'],
            ['title' => 'Télétravail', 'description' => 'Plus de liberté, mais aussi plus de solitude.']
        ], uniqueBy: ['title', 'description']);
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);
        $article->update(['title' => 'Villes vertes']);
    }


    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
    }
}
