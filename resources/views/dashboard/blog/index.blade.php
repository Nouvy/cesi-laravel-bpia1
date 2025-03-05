@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1>Liste des articles</h1>
    <a href="create-article.html" class="btn btn-success">Créer un article <i data-feather="plus"></i></a>
    <table class="table table-striped" id="myTable">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Etes-vous sur de vouloir supprimer cet article ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Confirmer</button>
            </div>
        </div>
    </div>
</div>
@endsection
