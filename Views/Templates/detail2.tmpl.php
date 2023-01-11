<?php

/**
 *
 * @var int $uid_standard
 * @var int $uid_sur_mesure
 * @var string $nom
 * @var float $prix_depart
 * @var int $date_fin_enchere
 * @var string $marque
 * @var string $modele
 * @var int $puissance
 * @var int $annee
 * @var string $description
 * @var string $photo
 * @var string $date
 * @var string $montant
 */

use LISENDER\LaPointeRouge\Utils\Php\Outils;

extract($data, $data2);

?>

<div class="container">
    <div class="row">
        <div class="col mt-3 mb-3">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="d-inline display-4"><?= $nom; ?></h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a class="link" data-fancybox="<?= $nom; ?>" data-src="/Imgs/<?= $photo; ?>" data-caption="<strong><?= $nom; ?></strong> | <?= $description; ?>">
                                <img src="/Imgs/<?= $photo; ?>" class="w-75 rounded" alt="<?= $nom; ?>">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2><?= $description; ?></h2>
                            <p>Dimensions : <?= $dimensions; ?> cm</p>
                            <p>Poids : <?= $poids; ?> kg</p>
                            <p>Temps de conception : <?= $temps_conception; ?> heures</p>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a href="/mesure" class="btn btn-outline-primary float-end mx-2">Retourner à la liste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>