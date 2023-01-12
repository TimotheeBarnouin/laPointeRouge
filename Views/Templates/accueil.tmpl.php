<?php

use LISENDER\LAPointeRouge\Utils\Php\Outils;

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
    <div>
        <!-- forgeron photo + texte -->
        <img class="img" src="Imgs/forge.jpg">
    </div>
    <div class="row"><!-- liste verticale produit sur mesure photo uniquement, 2 -->
        <?php foreach ($data2 as $rand2) {
        ?>
            <div class="col-sm-6">
                <div class="card mb-3 bg-secondary" style="width: 18rem;">
                    <a class="link" data-fancybox="<?= $rand2['nom']; ?>" data-src="/Imgs/<?= $rand2['photo']; ?>" data-caption="<strong><?= $rand2['nom']; ?></strong>">
                        <img src="/Imgs/<?= $rand2['photo']; ?>" class="card-img-top" alt="<?= $rand2['nom']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $rand2['nom']; ?></h5>
                        </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<div class="row">
    <div class="col-4"><!-- liste verticale produit standard image + nom + tarif -->
        <?php foreach ($data as $rand1) {
        ?>
            <div class="col-sm">
                <div class="card mb-3  bg-secondary" style="width: 18rem;">
                    <a class="link" data-fancybox="<?= $rand1['nom']; ?>" data-src="/Imgs/<?= $rand1['photo']; ?>" data-caption="<strong><?= $rand1['nom']; ?></strong>">
                        <img src="/Imgs/<?= $rand1['photo']; ?>" class="card-img" alt="<?= $rand1['nom']; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $rand1['nom']; ?></h5>
                        </div>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
        </ul>
    </div>
</div>