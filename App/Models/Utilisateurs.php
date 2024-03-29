<?php

namespace LISENDER\LaPointeRouge\Models;

/*
 * Modèle Utilisateurs
 */

class UtilisateursModel
{
    public string $nom;
    public string $prenom;
    public int $tel;
    public string $email;
    public string $password;

    public function __construct($userInfos)
    {
        $this->nom = $userInfos['nom'];
        $this->prenom = $userInfos['prenom'];
        $this->tel = $userInfos['tel'];
        $this->email = $userInfos['email'];
        $this->password = md5($userInfos['password']);
        // $this->password = password_hash($userInfos['password'], PASSWORD_DEFAULT);
        return $this;
    }
}
