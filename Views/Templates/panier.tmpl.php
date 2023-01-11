<?php
foreach ($data as $info) {
    extract($info);
}

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
        <div class="col-6">
            <h2>Vos commandes</h2>
            panier
        </div>
    </div>
</div>