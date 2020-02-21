<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Models\Article;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function showArticle()
    {
        $articles = Article::query()->paginate(3);
        return view('welcome', ['articles' => $articles]);
    }

    public function showMyArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        return view('articleMenu',  ['articles' => $articles]);


    }

    public function about()
    {
        return view('about');
    }

    public function addtext()
    {
        return view('addtext');
    }

    public function articleOne(Article $article)
    {
        $user = User::where('id', '=', $article->user_id)->first();
        $username = $user->name;
        return view('articleOne', ['article' => $article, 'username' => $username]);
    }

    public function addArticle(StoreBlogPost $request)
    {

        $article = Article::create($request->validated());
        $article->fill(['user_id' => \Auth::id()]);
        $article->save();
        return redirect()->back();

    }

    public function articleChange(Article $article)
    {
        return view('textchange', ['article' => $article]);
    }

    public function articleSave(Article $article, StoreBlogPost $request)
    {
        $article->fill($request->validated());
        $article->save();
        return redirect()->back();
    }

    public function articleDelete(Article $article, Request $request)
    {
        $article->delete($request->all());
        return redirect()->back();

    }

}
