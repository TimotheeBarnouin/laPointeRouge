<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Numéro de commande</th>
                <th>Client</th>
                <th>Produit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $commande) : ?>
                <tr>
                    <td><?php echo $commande['uid_panier']; ?></td>
                    <td><?php echo $commande['client_nom']; ?></td>
                    <td><?php echo $commande['produit_nom']; ?></td>
                    <td>
                        <form action="/" method="post">
                            <input type="hidden" name="supress" value="1">
                            <input type="hidden" name="uid_panier" value="<?php echo $commande['uid_panier']; ?>">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>