<?php

class Voiture {
    private string $_marque;
    private string $_modele;

    public function __construct(string $marque, string $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

// GETTER

    public function get_marque() {
        return $this->_marque;
    }
    public function get_modele() {
        return $this->_modele;
    }

// SETTER

    public function set_marque($NewMarque) {
        $this->_marque = (string) $NewMarque;
        return $this;
    }

    public function set_modele($NewModele) {
        $this->_modele = (string) $NewModele;
        return $this;
    }

// FONCTION

    public function getInfos() {
        return "<br>La voiture est un modèle $this->_marque $this->_modele";
    }
}