@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <a href="{{ route('articles.index') }}" class="btn btn-outline-success">Retour</a>
        <h1>Mettre à jour Article</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('articles.update', $article->id) }}">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="titre" class="form-label">Titre</label>
                <input id="titre" name="titre" class="form-control" type="text" value="{{ $article->titre }}" required>
            </div>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" aria-label="With textarea" id="description" required>{{ $article->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
@endsection
