@extends('layouts.dashboard')
@section('content')
<div class="container">
    <a href="{{ route('articles.index') }}" class="btn btn-outline-success">Retour</a>
    <h1>Visualiser Article</h1>
    <div class="card mb-3">
        <img  src="https://upload.wikimedia.org/wikipedia/fr/thumb/e/ef/Logo_cesi_2022.png/300px-Logo_cesi_2022.png" class="img-article card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{ $article->titre }}</h2>
            <p class="card-text">{{ $article->description }}</p>
            <p class="card-text"><small class="text-body-secondary">Mise à jour {{ $article->updated_at->diffForHumans() }} </small></p>
        </div>
    </div>
</div>
@endsection
