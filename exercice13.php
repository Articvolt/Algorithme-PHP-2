<h1>Exercice 13</h1>

<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.<br>
</p>
<p>v1 ➔ "Peugeot","408",5</p>
<p>v2 ➔ "Citroën","C4",3</p>

<p>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :
</p>

<h2>RESULTAT</h2>

<?php 

$v1 = new Voiture ("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

class Voiture {
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;

    public function __construct(string $marque, string $modele, int $nbPortes, int $vitesseActuelle = 0) {
        $this->_marque = $marque;
        $this->_modèle = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    // GETTER

    public function get_marque() {
        return $this->_marque;
    }
    public function get_modèle() {
        return $this->_modele;
    }
    public function get_nbPortes() {
        return $this->_nbPortes;
    }
    public function get__vitesseActuelle() {
        return $this->_vitesseActuelle;
    }

    // SETTER

    public function set_marque() {
        $this->_marque = (string) $marque;
        return $this;
    }

    public function set_modèle() {
        $this->_modèle = (string) $modele;
        return $this;
    }
    public function set_nbPortes() {
        $this->_nbPortes = (int) $nbPortes;
        return $this;
    }
    public function set_vitesseActuelle() {
        $this->_vitesseActuelle = (int) $vitesseActuelle;
        return $this;
    }
}