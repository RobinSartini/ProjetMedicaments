<?php

namespace App\Http\Controllers;

use App\dao\ServiceMedicament;

class MedicamentController
{
    public function listeMedicament()
    {
        $unMedicament = new ServiceMedicament();
        try {
            $mesMedicament = $unMedicament->getMedicament();
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/pageErreur', compact('monErreur'));
        }
        return view('vues/listeMedicament', compact('mesMedicament'));
    }
}
