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

        //récupération des achats dans la table panier
        $sql2 = "SELECT * FROM produit_standard
        INNER JOIN panier ON produit_standard.uid_standard = panier.uid_standard
        WHERE panier.uid_client = '$user_id'";
        $achat = PdoDb::getInstance()->requete($sql2);

        //classe vide pour appeler le template pré-construit
        return $this->render('layouts.default', 'templates.panier', $user, $achat);
    }

    public function panierAchat()
    {
        //récupération des éléments id client et id produit
        $client = $_POST['client_id'];
        $produit = $_POST['produit_id'];

        //insertion dans la BDD
        $sql = "INSERT INTO panier (uid_client, uid_standard) VALUE ('$client', '$produit')";
        $insertion = PdoDb::getInstance()->requete($sql);

        //redirection au panier pour voir l'achat
        return $this->redirect('/panier');
    }
}
