<?php

class VoitureElec extends Voiture{
    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque,$modele);
        $this->_autonomie = $autonomie;
    }

// GETTER 

    public function get_autonomie() {
        return $this->_autonomie;
    }

// SETTER
   
    public function set_autonomie($NewAutonomie) {
        $this->_autonomie = $NewAutonomie;
        return $this;
    }

// FONCTION

    public function getInfos() {
        echo "<br>".parent::getInfos()."  et a pour autonomie ". $this->_autonomie." km";
    }
}