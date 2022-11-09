<?php

namespace App\Http\Controllers;

use App\Exceptions\MonException;
use Request;
use Illuminate\Support\Facades\Session;
use App\metier\Frais;
use Exception;
use App\dao\ServiceFrais;


class FraisController extends Controller
{

    public function getFraisVisiteur()
    {
        try {
            $monErreur = Session::get('monErreur');
            Session::forget('monErreur');
            $unServiceFrais = new ServiceFrais();
            $id_visiteur = Session::get('id');
            $mesFrais = $unServiceFrais->getFrais($id_visiteur);
            return view('Vues/listeFrais', compact('mesFrais'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('Vues/listeFrais', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('Vues/listeFrais', compact('monErreur'));
        }
    }

    public function updateFrais($id_frais)
    {
        try {
            $monErreur = "";
            $unServiceFrais = new ServiceFrais();
            $unFrais = $unServiceFrais->getById($id_frais);
            $titreVue = "Modification d'ne fiche de Frais";
            return view('Vues/formFrais', compact('unFrais', 'titreVue', 'monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));

        }
    }

    public function validateFrais() {
        try {
            $id_frais = Request::input('id_frais');
            $anneemois = Request::input('anneemois');
            $nbjustificatif = Request::input('nbjustificatif');
            $unServiceFrais = new ServiceFrais();
            if ($id_frais > 0 ){
                $unServiceFrais->updateFrais($id_frais, $anneemois, $nbjustificatif);
            } else {
                $montant = Request::input('montant');
                $id_visiteur = Session::get('id');
                $unServiceFrais->insertFrais($anneemois, $nbjustificatif, $id_visiteur, $montant);
            }

            return redirect('/getListeFrais');
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));
        }
    }

    public function addFrais() {
        try {
            $monErreur ="";
            $unFrais = new Frais;
            $titreVue = "Ajout d'une fiche de Frais";

            return view('Vues/formFrais' , compact('unFrais', 'titreVue', 'monErreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('Vues/pageErreur', compact('monErreur'));
        }
    }

    public function supprimeFrais($id_Frais){
        $unServiceFrais = new ServiceFrais();
    try {
        $unServiceFrais->deleteFrais($id_Frais);
    } catch (MonException $e) {
        $monErreur = $e->getMessage();
        return view('Vues/pageErreur', compact('monErreur'));
    } catch (Exception $e) {
        $monErreur = $e->getMessage();
        return view('Vues/pageErreur', compact('monErreur'));
    }
    finally {
        return redirect('/getListeFrais');
    }

}


}

