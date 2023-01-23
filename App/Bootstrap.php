<?php

//use LISENDER\LaPointeRouge\Controllers\Annonces;


use LISENDER\LaPointeRouge\Controllers\Produits;

$produits = new Produits();
echo $produits->list_rand();
