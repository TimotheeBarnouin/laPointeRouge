<?php

use LISENDER\LaPointeRouge\Utils\Php\Outils;

/**
 * Produit standard
 * @var int $uid_standard
 * @var string $nom
 * @var string $description
 * @var string $dimensions
 * @var string $description
 * @var string $metal
 * @var float $poids
 * @var string $temps_conception
 * @var float $prix
 * @var string $photo
 */
?>
<div class="text-center">
    <h1 class="display-1">
        Découvrez nos produits !
    </h1>
</div>
<div class="container text-center">
    <?php
    /** @var array $data */
    $i = 0;
    foreach ($data as $produit) {
        if ($i % 4 == 0) {
            echo '<div class="row">';
        }
        //on utilise extract pour simplifier l'appel aux variables d'une annonce.
        extract($produit);
    ?>
        <div class="col-md-3">
            <div class="card grid-item bg-secondary <?= Outils::sanitizeName($nom); ?>">
                <a class="link" data-fancybox="<?= $nom; ?>" data-src="/Imgs/<?= $photo; ?>" data-caption="<strong><?= $nom; ?></strong> | <?= $description; ?>">
                    <img src="/Imgs/<?= $photo; ?>" class="card-img-top" alt="<?= $nom; ?>">
                </a>
                <div class="card-body text-center">
                    <h5 class="card-title text-primary"><?= $nom; ?><br><?= $prix; ?> euros</h5>
                    <p class="card-text text-primary"><?= $description; ?></p>
                    <p class="card-text text-primary">Dimensions : <?= $dimensions; ?> cm
                        <br>Métal : <?= $metal; ?>
                        <br>Poids : <?= $poids; ?> kg
                        <br>Conception : <?= $temps_conception; ?> heures
                    </p>
                    <a href="/standard/<?= $uid_standard; ?>" class="btn btn-outline-primary card-button">Détail</a>
                </div>
            </div>
        </div>
    <?php
        if (++$i % 4 == 0) {
            echo '</div>';
        }
    }
    ?>
</div>