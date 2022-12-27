<?php

class CompteBancaire{
    public $solde = 0;

    public function deposer(int $montant) : int{
       return $this->solde += $montant;  
    }

    public function retirer(int $montant) : int{
        return $this->solde -= $montant;
    }



}

?>