<div class="container">
    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <h1 class="display-4 text-center">Contactez-nous pour proposer votre projet</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <div class="card">
                <div class="card-body" id="commandeZone">
                    <form id="commandeform">
                        <div class="form-group has-validation mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" class="form-control" name="nom" id="nom" required autofocus>
                            <div class="invalid-feedback">Veuillez saisir un nom !</div>
                            <input type="hidden" name="commande" value="1">
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="prenom" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                            <div class="invalid-feedback">Veuillez saisir un prénom !</div>
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="email" class="form-label">Courriel :</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">Veuillez saisir un courriel valide !</div>
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="tel" class="form-label">Téléphone :</label>
                            <input type="tel" class="form-control" name="tel" maxlength="10" id="tel" required>
                            <div class="invalid-feedback">Veuillez saisir un numéro !</div>
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="description" class="form-label">Décrivez votre projet :</label>
                            <textarea class="form-control" name="description" id="description" required placeholder="Décrivez votre projet"></textarea>
                            <div class="invalid-feedback">Veuillez saisir la description de votre projet !</div>
                        </div>
                        <label for="escobar"></label>
                        <input type="text" id="escobar" name="escobar">
                        <div class="form-group">
                            <button type="button" id="commande-btn" class="btn btn-outline-primary float-end">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>