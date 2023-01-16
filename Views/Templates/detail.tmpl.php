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
    <div class="row text-primary">
        <div class="col mt-3 mb-3">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <h1 class="d-inline display-4 text-primary"><?= $nom; ?></h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="/Imgs/<?= $photo; ?>" class="w-75 rounded" alt="<?= $nom; ?>">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2><?= $description; ?></h2>
                            <p>Prix : <?= $prix; ?> euros.</p>
                            <p>Dimensions : <?= $dimensions; ?> cm</p>
                            <p>Poids : <?= $poids; ?> kg</p>
                            <p>Temps de conception : <?= $temps_conception; ?> heures</p>
                            <br>
                            <?php
                            //On détecte l'ouverture d'une session utilisateur, obligatoire pour proposer l'achat
                            if (isset($_SESSION['user'])) {
                            ?>
                                <div class="text-center">
                                    <form action="/" method="POST">
                                        <input type="hidden" name="client_id" value="<?= $_SESSION['user']['userid'] ?>">

                                        <!-- champs servant à identifier le post dans le router -->
                                        <input type="hidden" name="achat" value="1">

                                        <input type="hidden" name="produit_id" value="<?= $uid_standard ?>">
                                        <input type="submit" class="btn btn-outline-primary" value="Ajouter au panier">
                                    </form>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <a href="/standard" class="btn btn-outline-primary float-end mx-2">Retourner à la liste</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>