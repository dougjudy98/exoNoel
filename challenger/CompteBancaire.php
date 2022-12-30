<?php

class CompteBancaire{
    public $solde;

    public function __construct(float $solde){
        $this->solde = $solde;
    }

    public function deposer(float $montant) : int{
       return $this->solde += $montant;  
    }

    public function retirer(float $montant) : int{
        if($montant > $this->solde){
            echo "Vous n'avez pas assez pour retirer <br>";
            return $this->solde;
        } else{
            return $this->solde -= $montant;
        }
        


    }

    public function virement(CompteBancaire $compte, float $montant){
        $this->solde -= $montant;
        $compte->solde += $montant;
    }


    public function getSolde() : float{
        return $this->solde;
    }

    public function setSolde(float $value) : float{
        return $this->solde = $value;
    }





}

?>