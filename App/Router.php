<?php
/*
 * Le routeur réceptionne des variables $_POST ou $_GET.
 * Son rôle unique sera de router l'application vers les contôleurs ad hoc
 * qui définissent la logique de l'application puis génèrerent les affichages.
 */


use LISENDER\LaPointeRouge\Controllers\Controller;
use LISENDER\LaPointeRouge\Controllers\Produits;
use LISENDER\LaPointeRouge\Controllers\Commande;
use LISENDER\LaPointeRouge\Controllers\Encheres;
use LISENDER\LaPointeRouge\Models\UtilisateursModel;
use LISENDER\LaPointeRouge\Models\CommandesModel;
use LISENDER\LaPointeRouge\Controllers\Annonces;
use LISENDER\LaPointeRouge\Controllers\Artisan;
use LISENDER\LaPointeRouge\Controllers\Utilisateurs;
use LISENDER\LaPointeRouge\Controllers\Errors;
use LISENDER\LaPointeRouge\Controllers\Paniers;
use LISENDER\LaPointeRouge\Utils\Debug\dBug;

// On démarre le moteur de sessions PHP pour gérer les variables de $_SESSION.
session_start();

// On crée une variable qui mixte $_POST et $_GET
$_GP = array_merge($_POST, $_GET);

/*
 * Gestion des appels avec AJAX fetch.
 */

// On détecte les entrées get ou post pour router vers le contôleur ad hoc.
if (count($_GP) > 0) {

    if (isset($_GP['login']) && $_GP['login'] === '1') {
        $utilisateur = new Utilisateurs;
        echo $utilisateur->login($_GP);
        exit();
    }

    if (isset($_GP['register']) && $_GP['register'] === '1') {
        $utilisateur = new Utilisateurs;
        echo $utilisateur->register($_GP);
        exit();
    }

    if (isset($_GP['commande']) && $_GP['commande'] === '1') {
        $commande = new Commande;
        echo $commande->registerCommande($_GP);
        exit();
    }

    if (isset($_GP['achat']) && $_GP['achat'] === '1') {
        $achat = new Paniers;
        echo $achat->panierAchat($_GP);
        exit();
    }

    if (isset($_GP['error'])) {
        $errorNum = $_GP['error'];
        $error = new Errors;
        echo $error->errorDisplay($errorNum);
        exit();
    }

    if (isset($_GP['login'])) {
        $login = new Utilisateurs;
        echo $login->authDisplay();
        exit();
    }

    if (isset($_GP['logout'])) {
        Utilisateurs::logout();
        exit();
    }

    if (isset($_GP['register'])) {
        $login = new Utilisateurs;
        echo $login->registerDisplay();
        exit();
    }

    if (isset($_GP['standard'])) {
        $standard = new Produits;
        echo $standard->list_standard_complete();
        exit();
    }

    if (isset($_GP['mesure'])) {
        $mesure = new Produits;
        echo $mesure->list_sur_mesure_complete();
        exit();
    }

    if (isset($_GP['artisan'])) {
        $forge = new Artisan;
        echo $forge->artisan_page();
        exit();
    }

    if (isset($_GP['commande'])) {
        $Form = new Commande;
        echo $Form->commande_perso();
        exit();
    }

    if (isset($_GP['panier'])) {
        $panier = new Paniers;
        echo $panier->panierDisplay();
        exit();
    }

    if (isset($_GP['standardid'])) {
        $standardId = $_GP['standardid'];
        $standard = new Produits;
        echo $standard->details($standardId);
        exit();
    }

    if (isset($_GP['mesureid'])) {
        $mesureId = $_GP['mesureid'];
        $mesure = new Produits;
        echo $mesure->details2($mesureId);
        exit();
    }
}

// On récupère le flux JSON posté.
$json = file_get_contents('php://input');
// On convertit le flux JSON en tableau d'objets.
$data = json_decode($json);
// On route vers un contrôleur.
if (!empty($data)) {
    if (isset($data->getAllAnnonces) && $data->getAllAnnonces === '1') {
        exit();
    }
}
