<?php

namespace LISENDER\LaPointeRouge\Controllers;

use LISENDER\LaPointeRouge\Controllers\Controller;
use LISENDER\LaPointeRouge\Models\EncheresModel;
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;
use LISENDER\LaPointeRouge\Utils\Debug\dBug;
use LISENDER\LaPointeRouge\Utils\Php\Outils;

class Encheres extends Controller
{

    /*
    * Enregistre une enchère
    */
    public function setEnchere($enchereInfos): array
    {
        $enchereCreated = false;
        $newEnchereId = 0;
        $escobar = $enchereInfos['escobar'];

        // Le champ escobar du formulaire, caché par CSS doit être vide,
        // Un bot le remplira forcément...
        if ($escobar === '') {

            // on nettoie les données pour éviter des éventuelles injections XSS.
            $newEnchereClean = Outils::cleanUpValues($enchereInfos);

            // On enregistre l'enchère
            $newEnchereObj = new EncheresModel($newEnchereClean);
            PdoDb::getInstance()->inserer('encheres', $newEnchereObj);
            $newEnchereId = PdoDb::getInstance()->dernierIndex();
            $enchereCreated = true;
        }
        return ['enchereCreated' => $enchereCreated, 'newEnchereId' => $newEnchereId];
    }
}
