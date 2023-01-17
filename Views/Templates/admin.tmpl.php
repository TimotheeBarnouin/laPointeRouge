<div class="container">
    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <h1 class="display-4 text-center">Connexion administrateur</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-3 mb-3 mx-auto">
            <div class="card">
                <div class="card-body" id="adminZone" autocomplete="off">
                    <form action="/" method="POST">
                        <div class="form-group has-validation mb-3">
                            <label for="admlogin" class="form-label">Log-In :</label>
                            <input type="text" class="form-control" name="admlogin" id="admlogin" required autofocus>
                            <div class="invalid-feedback">log-in</div>
                        </div>
                        <div class="form-group has-validation mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <div class="invalid-feedback">Veuillez saisir un mot de passe !</div>
                        </div>
                        <!-- champs pour le routage -->
                        <input type="hidden" name="adminlog" value="1">

                        <label for="escobar"></label>
                        <input type="text" id="escobar" name="escobar">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary float-end">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>