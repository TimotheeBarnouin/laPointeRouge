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
    <div class="row">
        <div class="col-4"> <!-- forgeron photo + texte -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Notre local</h5>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="Imgs/forge.jpg">
                    <p class="card-text">Texte de la carte</p>
                </div>
                <div class="card-footer">
                    <!-- contenu du pied de page de la carte -->
                </div>
            </div>
        </div>
        <div class="col-4"> <!-- liste verticale produit sur mesure photo uniquement, 3 -->
            <ul>
                <?php foreach ($data as $rand1) {

                ?>
                    <li><a class="link" data-fancybox="<?= $rand1['nom']; ?>" data-src="/Imgs/<?= $rand1['photo']; ?>" data-caption="<strong><?= $rand1['nom']; ?></strong>">
                            <img src="/Imgs/<?= $photo; ?>" class="card-img-top" alt="<?= $rand1['nom']; ?>">
                        </a></li>
            </ul>
        <?php
                }
        ?>
        </div>
        <div class="col-4"> <!-- liste verticale produit standard image + nom + tarif -->
            <ul>
                <?php foreach ($data2 as $rand2) {

                ?>
                    <li><a class="link" data-fancybox="<?= $rand2['nom']; ?>" data-src="/Imgs/<?= $rand2['photo']; ?>" data-caption="<strong><?= $rand2['nom']; ?></strong>">
                            <img src="/Imgs/<?= $photo; ?>" class="card-img-top" alt="<?= $rand2['nom']; ?>">
                        </a></li>
            </ul>
        <?php
                }
        ?>
        </div>
    </div>
</div>