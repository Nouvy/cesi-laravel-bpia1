@extends('layouts.app')

@section('title')
    Projet Météo - Contact
@endsection

@section('content')
<div class="container">
    <form method="POST" action="sendemail.php">
        <div class="col-lg-12">
            <div class="col-lg-6">
                <label for="nom" class="form-label">Nom : </label>
                <input class="form-control" id="nom" type="text" placeholder="Nom" name="nom" required>
            </div>
            <div class="col-lg-6">
                <label for="prenom" class="form-label">Prénom : </label>
                <input class="form-control" id="prenom" type="text" placeholder="Prénom" name="prenom" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email : </label>
            <input class="form-control" id="email" type="email" placeholder="Email" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="message">Message : </label>
            <textarea class="form-control" id="message" placeholder="Message" name="message" required></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>
@endsection
