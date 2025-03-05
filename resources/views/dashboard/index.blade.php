@extends('layouts.dashboard')
@section('content')
<div class="custom-background-primary full-width">
    <h1 class="bebas-neue-regular">Bienvenue sur la station météo</h1>
</div>


<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <a href="utilisateurs.html">
                <div class="card">
                    <img src="img/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title bebas-neue-regular">Utilisateurs</h2>
                        <p class="card-text">Venez découvrir la liste des utilisateurs de notre station météo.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="blog/articles.html">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/496848472/fr/vectoriel/blog-blogs-et-blogglers-thème.jpg?s=612x612&w=0&k=20&c=JuD4b9tHHQUzSAfeEo40mhzqX_rk3dM5Hl1Hn8lkHoE=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title bebas-neue-regular">Articles</h2>
                        <p class="card-text">Venez décrouvrir la liste des articles de blog de notre station météo.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
