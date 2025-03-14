@extends('layouts.dashboard')
@section('content')
<div class="container">
    <a href="{{ route('historique_temperatures.index') }}" class="btn btn-outline-success">Retour</a>
    <h1>Créer Historique Temperature</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('historique_temperatures.store') }}">
        @csrf
        <div class="col-md-12">
            <label for="temperature" class="form-label">Température</label>
            <input id="temperature" name="temperature" class="form-control" type="number" required>
        </div>
        <br>

        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
@endsection
