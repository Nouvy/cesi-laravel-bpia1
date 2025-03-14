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
            <br>
            <div class="input-group">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="description" aria-label="With textarea" id="description" required>{{ $article->description }}</textarea>
            </div>
            <br>
            <div class="card-body">
                <table class="table table-hover" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Sélection</th>
                        <th>Catégories</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $categorie)
                            <tr>
                                <td>
                                    <input type="checkbox" name="categories[]"
                                           value="{{ $categorie->id }}"
                                            @foreach($article->categories as $categorieArt)
                                                @if($categorie->id == $categorieArt->id) checked @endif
                                            @endforeach
                                    >
                                </td>
                                <td>{{ $categorie->nom }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-success">Valider</button>
        </form>
    </div>
@endsection
