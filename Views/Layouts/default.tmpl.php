<?php

use LISENDER\LaPointeRouge\Utils\Php\Outils;

$uriSegments = Outils::getUriSegments();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>{pageTitle}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;300;500&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Css/bootstrap.min.css">
    <link rel="stylesheet" href="/Css/fancybox.min.css">
    <link rel="stylesheet" href="/Css/auto-encheres.css">
    <?php
    if (in_array($uriSegments[1], ['login', 'register'])) {
    ?>
        <link rel="stylesheet" href="/Css/auto-encheres-2.css">
    <?php
    }
    ?>
    <?php
    if (in_array($uriSegments[1], ['standard', 'mesure'])) {
    ?>
        <link rel="stylesheet" href="/Css/card.css">
    <?php
    }
    ?>
    <link type="image/png" sizes="16x16" rel="icon" href="/Imgs/marteau-16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/Imgs/marteau-32.png">
</head>

<body>
    <?php
    require_once(__DIR__ . '/../../Views/Partials/header.tmpl.php');
    ?>
    <main>
        {pageContent}
    </main>
    <?php
    require_once(__DIR__ . '/../../Views/Partials/footer.tmpl.php');
    // Ces bibliothèques Javascript ne sont requises que sur la page d'accueil
    if (empty($uriSegments[1])) {
    ?>
        <script src="/Js/fancybox.min.js"></script>

    <?php
    }
    if ($uriSegments[1] === 'annonce') {
    ?>
        <script src="/Js/fancybox.min.js"></script>
    <?php
    }
    ?>
    <script src="/Js/auto-encheres.js"></script>
    <?php
    if ($uriSegments[1] === 'login') {
    ?>
        <script src="/Js/login.js"></script>
    <?php
    }
    ?>
    <?php
    if ($uriSegments[1] === 'register') {
    ?>
        <script src="/Js/register.js"></script>
    <?php
    }
    ?>

    <?php
    if ($uriSegments[1] === 'commande') {
    ?>
        <script src="/Js/commande.js"></script>
    <?php
    }
    ?>

</body>

</html>