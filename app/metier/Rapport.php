<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rapport extends Model
{
    protected $table = 'rapport_visite';
    public $timestamps = false;
    protected $fillable = [
        'id_rapport',
        'id_praticien',
        'id_visiteur',
        'date_rapport',
        'bilan',
        'motif',

    ];
}
