<?php

use LISENDER\LaPointeRouge\Utils\Php\Outils;

$uriSegments = Outils::getUriSegments();
$activeLogin = $activeRegister = '';
$activeHome = ' text-secondary';
switch ($uriSegments[1]) {
    case 'login':
        $activeLogin = ' active';
        break;
    case 'register':
        $activeRegister = ' active';
        break;
    default:
        $activeHome = '';
        break;
}
?>
<header class="p-1 text" style="background: #910000">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img id="toplogo" src="/Imgs/logo.png" alt="LaPointeRouge">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/artisan" class="nav-link px-2<?= $activeHome ?>">Notre artisan</a></li>
                <li><a href="/standard" class="nav-link px-2<?= $activeHome ?>">Nos réalisations</a></li>
                <li><a href="/mesure" class="nav-link px-2<?= $activeHome ?>">Vos projets personnalisés</a></li>
                <li><a href="/commande" class="nav-link px-2<?= $activeHome ?>">Votre projet</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <li><a class="nav-link px-2 text-white"> (Bienvenue <?= $_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']; ?>)</a></li>
                <?php
                }
                ?>
            </ul>

            <div class="text-end">
                <?php
                if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                ?>
                    <a href="/panier" class="btn btn-outline-light me-2<?= $activeRegister; ?>">Panier</a>
                    <a href="/logout" class="btn btn-outline-light me-2">Déconnexion</a>
                <?php
                } else {
                ?>
                    <a href="/login" class="btn btn-outline-light me-2<?= $activeLogin; ?>">Connexion</a>
                <?php
                }
                ?>
                <a href="/register" class="btn btn-outline-light me-2<?= $activeRegister; ?>">S'enregistrer</a>
            </div>
        </div>
    </div>
</header>