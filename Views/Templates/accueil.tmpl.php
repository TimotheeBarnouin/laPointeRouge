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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <img src="Imgs/forge.jpg" class="card-img-top">
            </div>
        </div>
        <div class="col-md-4">
            <h1 class="display-1 text-center">La Pointe Rouge</h1>
            <p class="lead">
                Bienvenue sur notre site de commerce artisanal spécialisé dans la forge d'armes en acier. Nous sommes des artisans forgerons expérimentés et nous mettons notre savoir-faire au service de la création d'armes de qualité à la main.
            </p>
            <p>
                Notre spécialité est la forge d'armes en acier, telles que des épées, des lances, des haches et des couteaux. Nous utilisons des matériaux de qualité supérieure pour garantir la solidité et la durabilité de nos produits. Nous sommes également spécialisés dans la réparation et la restauration d'armes anciennes en acier.
            </p>
            <a href="/commande" class="btn btn-outline-primary">Contactez-nous !</a>
        </div>
    </div>
    <div>
        <h2 class="display-2 text-center  py-3 my-3">Vos demandes réalisées</h2>
    </div>
    <div class="row">
        <?php foreach ($data2 as $rand2) {
        ?>
            <div class="col-md-4"><!-- liste verticale produit standard image + nom + tarif -->
                <div class="card bg-secondary">
                    <a class="link" data-fancybox="<?= $rand2['nom']; ?>" data-src="/Imgs/<?= $rand2['photo']; ?>" data-caption="<strong><?= $rand2['nom']; ?></strong>">
                        <img src="/Imgs/<?= $rand2['photo']; ?>" class="card-img-top" alt="<?= $rand2['nom']; ?>">
                    </a>
                    <div class="card-body">
                        <a href="/mesure/<?= $rand2['uid_sur_mesure']; ?>">
                            <h5 class="card-title text-center"><?= $rand2['nom']; ?></h5>
                        </a>
                    </div>

                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <div>
        <h2 class="display-2 text-center py-3 my-3">Des exemples de nos productions</h2>
    </div>
    <div class="row">
        <?php foreach ($data as $rand1) {
        ?>
            <div class="col-md-3 py-3"><!-- liste verticale produit standard image + nom + tarif -->
                <div class="card bg-secondary">
                    <a class="link" data-fancybox="<?= $rand1['nom']; ?>" data-src="/Imgs/<?= $rand1['photo']; ?>" data-caption="<strong><?= $rand1['nom']; ?></strong>">
                        <img src="/Imgs/<?= $rand1['photo']; ?>" class="card-img-top" alt="<?= $rand1['nom']; ?>">
                    </a>
                    <div class="card-body">
                        <a href="/standard/<?= $rand1['uid_standard']; ?>">
                            <h5 class="card-title text-center"><?= $rand1['nom']; ?></h5>
                        </a>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>
    </div>