<?php

use LISENDER\LaPointeRouge\Utils\Php\Outils;

/**
 * Produit sur-mesure
 * @var int $uid_sur_mesure
 * @var string $nom
 * @var string $description
 * @var string $dimensions
 * @var string $description
 * @var string $metal
 * @var float $poids
 * @var string $temps_conception
 * @var string $photo
 */
?>
<div class="container">
    <div class="row">
        <div class="col mt-3 mb-3">
            <h1 class="d-inline">Nos projets personnalisés</h1>
            &nbsp;::&nbsp;
            <h3 class="d-inline">Faites vos jeux, rien ne va plus !</h3>
        </div>
    </div>
    <?php
    require_once('../Views/Partials/marques-filter.tmpl.php');
    require_once('../Views/Partials/order.tmpl.php');
    ?>
    <div class="row">
        <div class="grid">
            <?php
            /** @var array $data */
            foreach ($data as $annonce) {
                //on utilise extract pour simplifier l'appel aux variables d'une annonce.
                extract($annonce);
            ?>
                <div class="card grid-item <?= Outils::sanitizeName($marque); ?>">
                    <a class="link" data-fancybox="<?= $marque; ?>" data-src="/Imgs/<?= $photo; ?>" data-caption="<strong><?= $marque; ?></strong> | <?= $modele; ?>">
                        <img src="/Imgs/<?= $photo; ?>" class="card-img-top" alt="<?= $marque; ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title marque"><?= $marque; ?><br><?= $modele; ?></h5>
                        <p class="card-text"><?= $description; ?></p>
                        <a href="/annonce/<?= $uid_annonce; ?>" class="btn btn-details btn-outline-primary">Détails</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>