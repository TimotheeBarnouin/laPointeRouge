<?php

namespace LISENDER\LaPointeRouge\Models;

/*
 * Modèle Commandes
 */

class CommandesModel
{
    public string $nom;
    public string $prenom;
    public int $tel;
    public string $email;
    public string $description;

    public function __construct($commandeInfos)
    {
        $this->nom = $commandeInfos['nom'];
        $this->prenom = $commandeInfos['prenom'];
        $this->tel = $commandeInfos['tel'];
        $this->email = $commandeInfos['email'];
        $this->description = $commandeInfos['description'];
        return $this;
    }
}
