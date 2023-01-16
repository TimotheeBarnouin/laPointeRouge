<?php

namespace LISENDER\LaPointeRouge\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;

// Utilisation de la classe de debuggage dBug.
use LISENDER\LaPointeRouge\Utils\Debug\dBug;

/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */

class Paniers extends Controller
{
    /*
    * Renvoi page panier.
    */
    public function panierDisplay(): array|string
    {
        //on récupère l'id client dans la session
        $user_id = $_SESSION['user']['userid'];
        $sql = "SELECT * FROM client WHERE uid_client = $user_id";
        $user = PdoDb::getInstance()->requete($sql);
        //classe vide pour appeler le template pré-construit
        return $this->render('layouts.default', 'templates.panier', $user);
    }

    public function panierAchat()
    {
        $achat = $_POST;
    }
}
