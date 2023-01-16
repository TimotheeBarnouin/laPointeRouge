<?php
foreach ($data as $info) {
    extract($info);

?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Vos informations</h2>
                <p>nom :<br>
                    <?= $nom ?></p>
                <p>prénom :<br>
                    <?= $prenom ?></p>
                <p>email :<br>
                    <?= $email ?></p>
                <p>téléphone :<br>
                    <?= $tel ?></p>
            </div>
        <?php
    }
        ?>

        <div class="col-6">
            <h2>Vos commandes</h2>
            <?php

            //initialisation de la variable pour le montant total
            $total = 0;

            foreach ($data2 as $infoAchat) {
                extract($infoAchat);

                // Ajout du prix à la variable total
                $total += $prix;
            ?>
                <div class="row">
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
                <p>Montant final : <?= $total ?></p>
                <input type="button" class="btn btn-outline-primary" value="Payez le total : <?= $total ?> euros">
            </div>
        </div>
        </div>
    </div>