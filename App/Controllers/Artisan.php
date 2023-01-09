<?php

namespace LISENDER\LaPointeRouge\Controllers;

use LISENDER\LaPointeRouge\Controllers\Controller;
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;
use LISENDER\LaPointeRouge\Utils\Debug\dBug;

class Artisan extends Controller
{
    /*
    * Renvoi page artisan.
    */
    public function artisan_page(): array|string
    {
        // Requete de type SELECT * sur la table produit_standard.
        $sql = 'SELECT * FROM `produit_standard` ORDER BY RAND() LIMIT 5';
        // Exécution de la requête
        $test = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.artisan', $test);
    }
}
