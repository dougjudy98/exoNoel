<?php

class Personne{
    public $nom;
    public $age;
    public $compteBancaire;

    public function __construct(string $nom, int $age){
        $this->nom = ucfirst($nom);
        $this->age = $age;
    }

    public function sePresenter(){
        return "Bonjour, je m'appelle {$this->nom} et j'ai {$this->age} ans";
    }

    public function afficherInfos(){
        return " Nom : {$this->nom} <br> Age : {$this->age} <br> Solde : {$this->compteBancaire->solde}";
    }
}




?>