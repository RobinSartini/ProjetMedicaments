<?php

namespace App\metier;

class Medicament
{
    protected $table = 'medicament';
    public $timestamps = false;
    private $id_medicament;
    protected $fillable = [
        'id_medicament',
        'id_famille',
        'depot_legal',
        'nom_commercial',
        'effets',
        'contre_indication',
        'prix_echantillon',
];
}
