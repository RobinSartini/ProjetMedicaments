@extends('layouts.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="container">
            <div class="blanc">
                <h1>Liste de mes Rapports</h1>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID Rapport</th>
                    <th>ID Praticien</th>
                    <th>iD Visiteur</th>
                    <th>Date</th>
                    <th>Bilan</th>
                    <th>Motif</th>
                </tr>
                </thead>
                @foreach($mesRapport as $unRapport)
                    <tr>
                        <td>{{ $unRapport->id_rapport }}</td>
                        <td>{{ $unRapport->id_praticien }}</td>
                        <td>{{ $unRapport->id_visiteur }}</td>
                        <td>{{ $unRapport->date_rapport }}</td>
                        <td>{{ $unRapport->bilan }}</td>
                        <td>{{ $unRapport->motif }}</td>
                        <td style="text-align: center">
                            <a href="{{url('/modifierRapport')}}/{{($unRapport->id_rapport)}}">
                                <span class="glyphicon glyphicon-pencil"
                                      data-toggle="tooltip" data-placement="top" title="Modifier">

                                </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <br> <br>
            </table>

        </div>
    </div>
@stop
