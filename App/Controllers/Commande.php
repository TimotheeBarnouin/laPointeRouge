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
}
