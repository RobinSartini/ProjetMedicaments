<?php

namespace App\dao;
use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;

class ServiceRapport
{
    public function ajoutRapport($id_rapport,$id_praticien,$id_visiteur,$date_rapport, $bilan,$motif)
    {
        try {
            DB::table('rapport_visite')->insert(
                ['id_rapport' => $id_rapport, 'bilan' => $bilan,
                    'id_praticien' => $id_praticien, 'motif' => $motif,
                    'id_visiteur' => $id_visiteur,
                    'date_rapport' => $date_rapport]);
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function getListeRapport()
    {
        try {
            $mesRapport = DB::table('rapport_visite')
                ->select()
                ->get();
            return $mesRapport;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function getRapport($id)
    {
        try {
            $unRapport = DB::table('rapport_visite')
                ->select()
                ->where('id_rapport', '=', $id)
                ->first();
            return $unRapport;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function modificationRapport($id_rapport,$date_rapport,$bilan,$motif){
        try {
            DB::table('rapport_visite')
                ->where ('id_rapport','=' ,$id_rapport)
                ->update( ['id_rapport' => $id_rapport, 'date_rapport' => $date_rapport,
                    'bilan' => $bilan, 'motif' => $motif]);
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
    public function getUnRapport($id)
    {
        try {
            $mesRapport = DB::table('rapport_visite')
                ->select()
                ->where('id_rapport', '=', $id)
                ->first();
            return $mesRapport;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
