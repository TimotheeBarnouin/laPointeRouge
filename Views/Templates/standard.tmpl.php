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
    <div class="row">
        <div class="grid">
            <?php
            /** @var array $data */
            foreach ($data as $produit) {
                //on utilise extract pour simplifier l'appel aux variables d'une annonce.
                extract($produit);
            ?>
                <div class="card grid-item  bg-secondary <?= Outils::sanitizeName($nom); ?>">
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
                        <a href="/standard/<?= $uid_standard; ?>" class="btn btn-primary">Détail</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>