@extends('layouts.dashboard')
@section('content')
<div class="container">
    <a href="{{ route('historique_temperatures.index') }}" class="btn btn-outline-success">Retour</a>
    <h1>Modifier Historique Temperature</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('historique_temperatures.update', $historiqueTemperature->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="temperature" class="form-label">Température</label>
            <input id="temperature" name="temperature" class="form-control" type="number" value="{{ $historiqueTemperature->temperature }}" required>
        </div>
        <br>
        <div class="col-md-12">
            <label>Capteur</label>
            <select id="capteur" name="capteur_id" class="form-control">
                @foreach($capteurs as $capteur)
                    <option value="{{ $capteur->id }}"
                            @if($capteur->id == $historiqueTemperature->capteur_id) selected @endif
                    >{{ $capteur->nom }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
@endsection
