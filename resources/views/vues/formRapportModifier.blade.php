@extends('layouts.master')
@section('content')
    <div>
        <br> <br>
        <br> <br>
        <div class="container">
            <div class="blanc">
                <h1>Modification d'un Rapport</h1>
            </div>
            <div class="well">
                {!! Form::open(['url' => 'postmodifierRapport']) !!}
                <div class="col-md-12 well well-sm">
                    <div class="form_group">
                        <label class="col-md-3 control-label">Date du rapport</label>
                        <div class="col-md-3">
                            <input type="hidden" name="id_rapport" value="{{$unRapport->id_rapport ?? ''}} "/>
                            <input type="text" name="date" value="{{$unRapport->date_rapport ?? ''}}" class="form-control" required autofocus />
                        </div>
                    </div>
                    <BR> <BR>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Bilan</label>
                        <div class="col-md-3">
                            <input name="bilan" type="text" value="{{$unRapport->bilan}}"class="form-control" required autofocus />
                        </div>
                    </div>
                    <BR> <BR>
                    <div class="form-group">
                        <label class="col-md-3 control-label">motif :</label>
                        <div class="col-md-3">
                            <input type="text" name="motif" value="{{$unRapport->motif ?? ''}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                            &nbsp;
                            <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{ url('/') }}';}">
                                <span class="glyphicon glyphicon-remove"></span>Annuler </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
