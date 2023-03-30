@extends('layouts.master')
@section('content')
<div>
        <h1 class="bvn"> Recherche d'un Rapport </h1>
    </div>
{!! Form::open(array('route' => array ('unRapport'),'method'=>'post')) !!}
<div class="col-md-2 col-sm-6">
    <select class="form-control" name="cbRapport" id="date_rapport" required>
        <option value="0">Selection d'une date</option>
        @foreach($mesRapport as $unRap){
        <option value="{{$unRap->date_rapport}}">{{$unRap->date_rapport}}</option>
        }
        @endforeach
    </select>
</div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <button type="submit" class="btn btn-default btn-primary">
                <span class="glyphicon glyphicon-ok"></span>Valider
            </button>
            &nbsp;
            <button type="button" class="btn btn-default btn-primary" onclick="javascript:if(confirm('vous êtes sûr?'))window.location='{{url('/')}}';">
                <span class="glyphicon glyphicon-remove"></span> Annuler</button>
        </div>
    </div>
@stop
