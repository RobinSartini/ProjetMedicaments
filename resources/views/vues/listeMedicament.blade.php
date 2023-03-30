@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>Liste de mes médicaments</h1>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID Médicament</th>
                    <th>ID Famille</th>
                    <th>Depot légal</th>
                    <th>Nom commercial</th>
                    <th>Effets</th>
                    <th>contre indication</th>
                    <th>Prix Echantillon en €</th>
                </tr>
                </thead>
                @foreach($mesMedicament as $unMed)
                    <tr>
                        <td>{{ $unMed->id_medicament }}</td>
                        <td>{{ $unMed->id_famille}}</td>
                        <td>{{ $unMed->depot_legal}}</td>
                        <td>{{ $unMed->nom_commercial}}</td>
                        <td>{{ $unMed->effets}}</td>
                        <td>{{ $unMed->contre_indication}}</td>
                        <td>{{ $unMed->prix_echantillon}}</td>
                    </tr>
                @endforeach
                <br> <br>
            </table>

        </div>
    </div>
@stop

