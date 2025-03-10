@extends('layouts.dashboard')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Liste des Articles</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-success">
                <i data-feather="plus"></i> Créer un article
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->titre }}</td>
                            <td>{{ $article->description }}</td>
                            <td class="text-center">
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">
                                    <i data-feather="edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $article->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i data-feather="trash-2"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $articles->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer cet article ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <form method="POST" id="deleteForm" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll(".delete-btn");
            const deleteForm = document.getElementById("deleteForm");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const articleId = this.getAttribute("data-id");
                    deleteForm.action = `/dashboard/articles/${articleId}`;
                });
            });
        });
    </script>
@endsection
