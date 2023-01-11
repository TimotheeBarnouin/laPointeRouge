<?php

use LISENDER\LaPointeRouge\Utils\Php\Outils;

/**
 * Produit standard
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
            <h1 class="d-inline">Vos projets réalisés</h1>
            &nbsp;::&nbsp;
            <h3 class="d-inline">Votre rêve, notre ambition</h3>
        </div>
    </div>
    <?php /*
    require_once('../Views/Partials/marques-filter.tmpl.php');
    require_once('../Views/Partials/order.tmpl.php'); */
    ?>
    <div class="row">
        <div class="grid">
            <?php
            /** @var array $data */
            foreach ($data as $mesure) {
                //on utilise extract pour simplifier l'appel aux variables d'une annonce.
                extract($mesure);
            ?>
                <div class="card grid-item <?= Outils::sanitizeName($nom); ?>">
                    <a class="link" data-fancybox="<?= $nom; ?>" data-src="/Imgs/<?= $photo; ?>" data-caption="<strong><?= $nom; ?></strong> | <?= $description; ?>">
                        <img src="/Imgs/<?= $photo; ?>" class="card-img-top" alt="<?= $nom; ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title nom"><?= $nom; ?></h5>
                        <p class="card-text"><?= $description; ?></p>
                        <p class="card-text"><?= $dimensions; ?> cm</p>
                        <p class="card-text"><?= $metal; ?></p>
                        <p class="card-text"><?= $poids; ?> kg</p>
                        <p class="card-text"><?= $temps_conception; ?> heures</p><br>
                        <a href="/mesure/<?= $uid_sur_mesure; ?>" class="btn btn-details btn-outline-primary">Détails</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>