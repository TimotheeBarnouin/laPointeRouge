<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Numéro de commande</th>
                <th>Client</th>
                <th>Produit</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $commande) : ?>
                <tr>
                    <td><?= $commande['uid_panier']; ?></td>
                    <td><?= $commande['client_nom']; ?></td>
                    <td><?= $commande['produit_nom']; ?></td>
                    <td><?= $commande['produit_prix']; ?> euros</td>
                    <td>
                        <form action="/" method="post">
                            <input type="hidden" name="suppress" value="1">
                            <input type="hidden" name="commande" value="<?= $commande['uid_panier']; ?>">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>