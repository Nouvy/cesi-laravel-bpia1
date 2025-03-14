<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(30);
        return view('dashboard.blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('dashboard.blog.new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:10',
            'description' => 'required|string|min:20',
            'categories' =>  'required|array|min:1',
            'categories.*' => 'exists:categories,id',
        ]);

        //Récupération de l'utilisateur connecté
        $user = auth()->user();

        $article = new Article();
        $article->titre = $request->input('titre');
        $article->description = $request->input('description');
        $article->user_id = $user->id;
        $article->save();

        $article->categories()->attach($request->input('categories'));
        //Article::create($request->all());

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        Carbon::setLocale('fr');
        $categories = $article->categories;
        return view('dashboard.blog.show',
            compact('article', 'categories'));;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Categorie::all();
        return view('dashboard.blog.edit',
            compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre' => 'required|string|max:10',
            'description' => 'required|string|min:20',
            'categories' =>  'required|array|min:1',
            'categories.*' => 'exists:categories,id',
        ]);

        //$article = Article::find($id);

        $article->update($request->all());

        $article->categories()->sync($request->input('categories'));

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return redirect()->route('articles.index');
    }
}
