<?php
namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;


class Frais extends Model
{


    //On déclare la table Frais
    protected $table = 'frais';
    public $timestamps = false;
    private $id_frais;
    protected $fillable = [
        'id_frais',
        'id_etat',
        'anneemois',
        'id_visiteur',
        'nbjustificatifs',
        'datemodification',
        'montantvalide',

    ];

    public function __construct(){
        {
            $this->id_frais = 0;
            //$this->montantValide = 0;

        }
    }
}
