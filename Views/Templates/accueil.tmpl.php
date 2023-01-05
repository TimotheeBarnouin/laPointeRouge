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
                <li>Élément de liste 1</li>
                <li>Élément de liste 2</li>
                <li>Élément de liste 3</li>
            </ul>
        </div>
        <div class="col-4"> <!-- liste verticale produit standard image + nom + tarif -->
            <ul>
                <li>Élément de liste 1</li>
                <li>Élément de liste 2</li>
                <li>Élément de liste 3</li>
            </ul>
        </div>
    </div>
</div>