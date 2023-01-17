<?php
foreach ($data as $info) {
    extract($info);

?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="display-4 py-4">Vos informations</h2>
                <p class="py-2"><strong>Nom :</strong><br>
                    <?= $nom ?></p>
                <p class="py-2"><strong>Prénom :</strong><br>
                    <?= $prenom ?></p>
                <p class="py-2"><strong>Email :</strong><br>
                    <?= $email ?></p>
                <p class="py-2"><strong>Téléphone :</strong><br>
                    <?= $tel ?></p>
            </div>
        <?php
    }
        ?>

        <div class="col-6">
            <h2 class="display-4 py-4">Vos commandes</h2>
            <?php

            //initialisation de la variable pour le montant total
            $total = 0;

            foreach ($data2 as $infoAchat) {
                extract($infoAchat);

                // Ajout du prix à la variable total
                $total += $prix;
            ?>
                <div class="row py-2">
                    <!-- lien vers la page détail du produit -->
                    <a href="/standard/<?= $uid_standard ?>">
                        <h4><?= $nom ?></h4>
                    </a>
                    <p><?= $description ?> Montant : <?= $prix ?> euros.</p>
                </div>
            <?php
            }
            ?>
            <div>
                <p class="display-6 py-3">Montant final : <?= $total ?> euros</p>
                <input type="button" class="btn btn-outline-primary my-3 py-3" value="Payez le total : <?= $total ?> euros">
                <a href="/standard" class="btn btn-outline-primary my-3 py-3">Retournez aux produits</a>
            </div>
        </div>
        </div>
    </div>