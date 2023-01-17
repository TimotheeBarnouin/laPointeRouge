<?php

namespace LISENDER\LaPointeRouge\Controllers;

// On utilisera ici plusieurs classes.
use LISENDER\LaPointeRouge\Models\UtilisateursModel;
use LISENDER\LaPointeRouge\Utils\Database\PdoDb;
use LISENDER\LaPointeRouge\Utils\Debug\dBug;
use LISENDER\LaPointeRouge\Utils\Php\Outils;

/*
 *  Classe de gestion des utilisateurs étendue depuis la classe Controller.
 */


class Admin extends Controller
{
    /*
     * Afffiche le formulaire de connexion
     */
    public function authDisplay(): array|string
    {
        return $this->render('layouts.default', 'templates.admin');
    }

    /*
    * Authentifie un utilisateur
    */
    public function login($credentials): bool|string
    {
        // On récupère les données du formualire.
        $escobar = $credentials['escobar'];
        $login = $credentials['admlogin'];
        $password = $credentials['password'];

        // On créé une variable de retour pour la méthode login.
        $connected = false;

        // Le champ escobar du formulaire, caché par CSS doit être vide,
        // Un bot le remplira forcément...
        if ($escobar === '') {

            // Requete de type SELECT * sur la table admin,
            // On applique à la clause WHERE la condition d'égalité du log et du mot de passe haché MD5 et encrypté en AES.
            $sql = 'SELECT * FROM `admin` WHERE `login` ="' . $login . '" AND `password` = MD5(AES_ENCRYPT("' . $password . '","set"))';

            // On exécute la requête grace à la class PdoDb.
            $login = PdoDb::getInstance()->requete($sql, 'fetch');

            // Si la requête renvoie un utilisateur,
            // on stocke les informations de l'utilisateur dans un tableau de session.
            if (is_array($login) && !empty($login)) {
                $_SESSION['admin']['id'] = $login['uid_admin'];
                $_SESSION['admin']['nom'] = $login['login'];

                //on utilise le login par sécurité pour masquer le password
                $_SESSION['admin']['password'] = $login['login'];

                // La connexion à l'application a réussi, on renvoie true.
                $connected = true;
            } else {
                // La connexion à l'application a échoué, on renvoie false.
                $connected = false;
            }
        }
        return $connected;
    }

    // Déconnecte l'utilisateur.
    public static function logout()
    {
        // On détruit les variables de session.
        session_unset();
        // On détruit la session.
        session_destroy();
        // On redirige le visiteur vers la page d'accueil.
        header('location:/');
    }

    public function commDisplay()
    {
        // Requete de type SELECT * sur la table panier.
        $sql = 'SELECT panier.*, client.nom as client_nom, produit_standard.nom as produit_nom FROM panier
        JOIN client ON panier.uid_client = client.uid_client
        JOIN produit_standard ON panier.uid_standard = produit_standard.uid_standard';

        // Exécution de la requête
        $Rand1 = PdoDb::getInstance()->requete($sql);


        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default', 'templates.adminoffice', $Rand1);
    }
}
