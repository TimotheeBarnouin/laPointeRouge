<?php

namespace LISENDER\LaPointeRouge\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;

// Utilisation de la classe de debuggage dBug.
use LISENDER\LaPointeRouge\Utils\Debug\dBug;


/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */

class Produits extends Controller
{
    /*
    * Affiche 5 produits standards au hasard.
    */
    public function list_standard(): array|string
    {
        // Requete de type SELECT * sur la table produit_standard.
        $sql = 'SELECT * FROM `produit_standard` ORDER BY RAND() LIMIT 5';
        // Exécution de la requête
        $standard = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.accueil', $standard);
    }

    /*
    * Affiche 3 produits sur mesure au hasard.
    */
    public function list_sur_mesure(): array|string
    {
        // Requete de type SELECT * sur la table produit_sur_mesure.
        $sql = 'SELECT * FROM `produit_sur_mesure` ORDER BY RAND() LIMIT 5';
        // Exécution de la requête
        $mesure = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.accueil', $mesure);
    }

    /*
    * Affiche tout les produits standards.
    */
    public function list_standard_complete(): array|string
    {
        // Requete de type SELECT * sur la table produit_standard.
        $sql = 'SELECT * FROM `produit_standard` ORDER BY `nom`';
        // Exécution de la requête
        $standard = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.standard', $standard);
    }

    /*
    * Affiche tout les produits sur mesure.
    */
    public function list_sur_mesure_complete(): array|string
    {
        // Requete de type SELECT * sur la table produit_sur_mesure.
        $sql = 'SELECT * FROM `produit_sur_mesure` ORDER BY `nom`';
        // Exécution de la requête
        $mesure = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.mesure', $mesure);
    }

    //fonction detail standard

    //fonction detail sur-mesure
}
