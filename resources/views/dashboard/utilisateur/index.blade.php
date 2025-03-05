@extends('layouts.dashboard')
@section('content')
<div class="container">
    <h1 id="titre">Liste des utilisateurs de la station</h1>
    <a href="" class="btn btn-success double-margin">Créer un utilisateur <i data-feather="plus"></i></a>
    <button onclick="changerTitre()" type="button" id="btn-titre" class="btn btn-outline-info">Changer Titre</button>
    <button type="button" id="btn-titre-2" class="btn btn-outline-danger">Changer Titre 2</button>

    <!-- Table User -->
    <table class="table table-striped" id="myTable">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="tbody">
        @foreach($utilisateurs as $utilisateur)
            <tr>
                <td>{{ $utilisateur->id }}</td>
                <td>{{ $utilisateur->name }}</td>
                <td>{{ $utilisateur->email }}</td>
                <td><a href="" class="btn btn-info"><i data-feather="eye"></i></a><a href="" class="btn btn-warning"><i data-feather="edit"></i></a><a href="" class="btn btn-danger"><i data-feather="trash-2"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- End Table User -->
    {{ $utilisateurs->links("pagination::bootstrap-5") }}
</div>
@endsection
