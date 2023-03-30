@extends('layouts.master')
@section('content')
    <div>
        <br><br><br><br>
        <div class="container">
            <div class="blanc">
                <h1>Ajout d'un Rapport :</h1>
            </div>
            <div class="well">
                {!! Form::open(['url' => 'postRapport', 'files' => true]) !!}
                <BR><BR>
                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">ID Praticien :</label>
                        <input type="text" name="id_praticien"  class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR>
                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">ID Visiteur :</label>
                        <input type="text" name="id_visiteur"  class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR>
                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Date du rapport :</label>
                        <input type="text" name="date_rapport"  class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR>

                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Bilan Rapport :</label>
                        <input type="text" name="bilan"  class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR>
                <div class="col-md-12 well well-sm">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Motif Rapport :</label>
                        <input type="text" name="motif"  class="form-control" required autofocus />
                    </div>
                </div>
                <BR><BR><BR>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                        &nbsp;

                        <button type="button" class="btn btn-default btn-primary" onclick="{ window.location = '{{url('/')}}';}">
                            <span class="glyphicon glyphicon-remove"></span>Annuler
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
