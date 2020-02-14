<?php


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function showArticle()
    {
        $articles = Article::query()->paginate(3);
        return view('welcome', ['articles' => $articles]);
    }

    public function about()
    {
        return view('about');
    }

    public function articleOne (Article $article)
    {
        return view('articleOne', ['article' => $article]);
    }
}
