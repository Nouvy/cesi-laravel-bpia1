<?php

use App\Models\Article;
use App\Models\HistoriqueTemperature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/utilisateurs', function () {
    $users = User::all();
    return response()->json(['users' => $users]);
});

Route::get('/articles', function () {
    $articles = Article::all();
    return response()->json(['articles' => $articles]);
});

Route::post('/create-article', function (Request $request) {
    //Création d'un article en definissant chaque champs avec un Save
    /*$article = new Article();
    $article->titre = $request->titre;
    $article->description = $request->input('description');
    $article->save();*/

    //Définition des champs avec Create
    /*$article = Article::create([
        'titre' => $request->titre,
        'description' => $request->description
    ]);*/

    //Utilisation de tous les champs recu en POST
    $article = Article::create(
        $request->all()
    );

    return response()->json(['status' => 'success', 'article' => $article]);
});

Route::get('/historique-temperatures', function (Request $request) {
    $historiqueTemps =  HistoriqueTemperature::all();
    return response()->json(['historiqueTemps' => $historiqueTemps]);
});

