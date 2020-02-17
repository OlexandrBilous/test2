<?php


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
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

    public function addtext()
    {
        return view('addtext');
    }

    public function articleOne(Article $article)
    {
        return view('articleOne', ['article' => $article]);
    }

    public function addArticle(Request $request)
    {
        Article::create($request->all());
//        $article = new Article;
//        $article->title = trim($request->input('title'));
//        $article->content = trim($request->input('content'));
//        $article->save();
        return redirect()->back();

    }

//  public function addArticle(Request $request)
//    {
//        Request::create($request->all());
//        return redirect()->back();
//    }
//}
    public function articleChange(Article $article)
    {
        return view('textchange', ['article' => $article]);
    }

    public function articleSave(Article $article, Request $request)
    {
        $article->fill($request->all());
        $article->save();
        return redirect()->back();
//        Article::where('articles', $article)->update($request->except(['_token']));
//        return redirect('/articles');
    }
    public function articleDelete(Article $article, Request $request)
    {
        $article->delete($request->all());
        return redirect()->back();

    }
}
