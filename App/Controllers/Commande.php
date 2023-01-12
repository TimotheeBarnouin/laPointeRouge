<?php

namespace LISENDER\LaPointeRouge\Controllers;

// On utilisera ici plusieurs classes.
use LISENDER\LaPointeRouge\Controllers\Controller;
use LISENDER\LaPointeRouge\Models\CommandesModel;
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;
use LISENDER\LaPointeRouge\Utils\Debug\dBug;
use LISENDER\LaPointeRouge\Utils\Php\Outils;

/*
 *  Classe de gestion des commandes
 */

class Commande extends Controller
{
    /*
     * Afffiche le formulaire de commande personnalisée
     */
    public function commande_perso(): array|string
    {
        return $this->render('layouts.default', 'templates.commande');
    }

    /*
    * Enregistre une commande
    */
    public function registerCommande($newCommande): bool|string
    {

        $commandeCreated = false;
        $newCommandeId = 0;
        $escobar = $newCommande['escobar'];

        // Le champ escobar du formulaire, caché par CSS doit être vide,
        // Un bot le remplira forcément...
        if ($escobar === '') {

            // on nettoie les données pour éviter des éventuelles injections XSS.
            $newCommandeClean = Outils::cleanUpValues($newCommande);

            //On vérifie si la commande existe déjà en vérifiant la description pour éviter un doublon
            $req_commande_exists = "SELECT `uid_commande` FROM `commande_sur_mesure` WHERE `description`='" . $newCommandeClean['description'] . "'";
            $res_commande_exists = PdoDb::getInstance()->requete($req_commande_exists, 'fetch');
            if (is_array($res_commande_exists) && !empty($res_commande_exists)) {
                $commandeCreated = false;
            } else {
                // On enregistre l'utilisateur
                $newCommandeObj = new CommandesModel($newCommandeClean);
                PdoDb::getInstance()->inserer('commande_sur_mesure', $newCommandeObj);
                $newCommandeId = PdoDb::getInstance()->dernierIndex();
                $commandeCreated = true;
            }
        }
        return json_encode(['commandecreated' => $commandeCreated, 'newCommandeId' => $newCommandeId]);
    }
}
