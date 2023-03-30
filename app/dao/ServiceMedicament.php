<?php

namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Support\Facades\DB;

class ServiceMedicament
{
    public function getMedicament()
    {
        try {
            $mesMedicament = DB::table('medicament')
                ->select()
                ->get();
            return $mesMedicament;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
