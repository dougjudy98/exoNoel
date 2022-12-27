<?php

class CompteBancaire{
    public $solde;

    public function __construct(int $solde){
        $this->solde = $solde;
    }

    public function deposer(int $montant) : int{
       return $this->solde += $montant;  
    }

    public function retirer(int $montant) : int{
        return $this->solde -= $montant;
    }



}

?>