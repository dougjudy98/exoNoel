<?php

class Personne{
    public $nom;
    public $age;
    public $compteBancaire;

    public function __construct(string $nom, int $age, CompteBancaire $compte){
        $this->nom = ucfirst($nom);
        $this->age = $age;
        $this->compteBancaire = $compte;
    }

    public function sePresenter(){
        return "Bonjour, je m'appelle {$this->nom} et j'ai {$this->age} ans";
    }

    public function afficherInfos(){
        return " Nom : {$this->nom} <br> Age : {$this->age} <br> Solde : {$this->compteBancaire->solde}";
    }

    public function getNom() : string{
        return $this->nom;
    }

    public function setNom(string $value) : string{
        return $this->nom = $value;
    }

    public function getAge() : int{
        return $this->age;
    }

    public function setAge(int $value) : int{
        return $this->age = $value;
    }

    public function getCompteBancaire() {
        return $this->compteBancaire;
    }

    public function setCompteBancaire($montant) : CompteBancaire {
        $compte = new CompteBancaire($montant);
        return $this->compteBancaire = $compte;
    }
}




?>