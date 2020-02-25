<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;

use App\Http\Requests\StoreCategoriesPost;
use App\Models\Categories;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    public function addCategoriesView()
    {
        return view('addCategories');
    }
    public function addCategoriesForm(StoreCategoriesPost $request)
    {
        $categories = Categories::create($request->validated());
        return redirect()->back();
    }
    public function categoriesSave(Categories $categories, StoreCategoriesPost $request)
    {
        $categories->fill($request->validated());
        $categories->save();
        return redirect()->back();
    }
    public function showCategories()
    {
        $articles = Categories::query()->all()->paginate(3);
        return  ;
    }
}
