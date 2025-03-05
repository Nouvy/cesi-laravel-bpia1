@extends('layouts.dashboard')
@section('content')
<div class="container">
    <a href="articles.html" class="btn btn-outline-success">Retour</a>
    <h1>Créer Article</h1>
    <div class="col-md-12">
        <label for="titre" class="form-label">Titre</label>
        <input id="titre" class="form-control" type="text" >
    </div>
    <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" aria-label="With textarea" id="description"></textarea>
    </div>
    <button type="button" class="btn btn-success" onclick="sendArticle()">Valider</button>
</div>
@endsection
