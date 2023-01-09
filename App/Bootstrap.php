<?php

//use LISENDER\LaPointeRouge\Controllers\Annonces;

//$annonces = new Annonces();
//echo $annonces->list();


use LISENDER\LaPointeRouge\Controllers\Produits;

$produits = new Produits();
echo $produits->list_rand();
