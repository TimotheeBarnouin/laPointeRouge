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
        //classe vide pour appeler le template pré-construit
        return $this->render('layouts.default', 'templates.artisan');
    }
}
