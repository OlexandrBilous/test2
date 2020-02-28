<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use App\Models\Article;
use App\Models\Categories;
use App\Models\Comment;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\User;


class ArticleController extends Controller
{
    public function showArticle(Request $request)
    {
        $articles = Article::query()
//            ->when($request->input('category_id'), function (Builder $builder, $categoryId) {
//                $builder->where('category_id', $categoryId);
//            })
            //        route('index' ,['category_id' => $category->id]) Пример для вьюхи
            ->where('postdate', '<=', date('Y-m-d'))
            ->paginate(3);


        return view('welcome', [
            'articles' => $articles,
           'categories' => Categories::all(),
        ]);
    }

    public function showMyArticle()
    {
        $articles = Article::query()->where('user_id', '=', Auth::id())->paginate(3);
        $categories = Categories::all();
        return view('articleMenu', ['articles' => $articles, 'categories' => $categories]);


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
        $categories = Categories::where('id', '=', $article->category_id)->first();
        $category = $categories->name;
        $comments = Comment::where('articles_id', '=', $article->id)->get();;
        return view('articleOne', ['article' => $article, 'username' => $username, 'category' => $category, 'comments' => $comments]);
    }

    public function addArticle(StoreBlogPost $request)
    {
        /** @var User $user */
        $user = $request->user();
        $user->articles()->create($request->validated());

        return redirect()->back();

    }

    public function articleChange(Article $article)
    {
        return view('textchange', [
            'article' => $article,
            'categories' => Categories::all(),
        ]);
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

    // отображение статтей по категориям

    public function category(Categories $category)
    {
        $articles = Article::query()->where('category_id', '=', $category->id)->get();
        return view('showCategories', ['articles' => $articles, 'category' => $category]);
    }


}
