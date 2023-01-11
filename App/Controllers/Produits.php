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
    * Affiche 5 produits standards au hasard et affiche 3 produits sur mesure au hasard.
    */
    public function list_rand(): array|string
    {
        // Requete de type SELECT * sur la table produit_standard.
        $sql = 'SELECT * FROM `produit_standard` ORDER BY RAND() LIMIT 5';
        $sql1 = 'SELECT * FROM `produit_sur_mesure` ORDER BY RAND() LIMIT 2';
        // Exécution de la requête
        $Rand1 = PdoDb::getInstance()->requete($sql);
        $Rand2 = PdoDb::getInstance()->requete($sql1);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.accueil', $Rand1, $Rand2);
    }

    /*
    * Affiche tout les produits standards.
    */
    public function list_standard_complete(): array|string
    {
        // Requete de type SELECT * sur la table produit_standard.
        $sql = 'SELECT * FROM `produit_standard`';
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

    // Affiche le détail d'un produit standard
    public function details($uid_standard): array|string
    {
        // Requete de type SELECT * sur la table produit_standard à partir de l'uid_standard.
        $sql = 'SELECT * FROM `produit_standard` WHERE `uid_standard`=' . $uid_standard;
        $detail = PdoDb::getInstance()->requete($sql, 'fetch');

        // Transmission ddu produit à la vue (Layout + détails).
        return $this->render('layouts.default', 'templates.detail', $detail);
    }

    // Affiche le détail d'un produit sur mesure
    public function details2($uid_sur_mesure): array|string
    {
        // Requete sur la table produit_sur_mesure
        $sql2 = 'SELECT * FROM `produit_sur_mesure` WHERE `uid_sur_mesure`=' . $uid_sur_mesure;
        $detail2 = PdoDb::getInstance()->requete($sql2, 'fetch');

        // Transmission ddu produit à la vue (Layout + détails).
        return $this->render('layouts.default', 'templates.detail2', $detail2);
    }
}
