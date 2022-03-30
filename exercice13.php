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

$v1 = new Voiture ("véhicule 1","Peugeot", "408", 5);
$v2 = new Voiture("véhicule 2", "Citroën", "C4", 3);

class Voiture {
    private string $_ID;
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_contact;

    public function __construct(string $ID, string $marque, string $modele, int $nbPortes) {
        $this->_ID = $ID;
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        // On met les valeurs par défaut 
        $this->_vitesseActuelle = 0;
        $this->_contact = false;
    }

    // GETTER

    public function get_marque() {
        return $this->_marque;
    }
    public function get_modele() {
        return $this->_modele;
    }
    public function get_nbPortes() {
        return $this->_nbPortes;
    }
    public function get__vitesseActuelle() {
        return $this->_vitesseActuelle;
    }
    public function get_ID() {
        return $this->_ID;
    }
    public function get_contact() {
        return $this->_contact;
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
    public function set_nbPortes($NewNbPortes) {
        $this->_nbPortes = (int) $NewNbPortes;
        return $this;
    }
    public function set_vitesseActuelle($NewVitesseActuelle) {
        $this->_vitesseActuelle = (int) $NewVitesseActuelle;
        return $this;
    }
    public function set_ID($NewID) {
        $this->_ID = (string) $NewID;
        return $this;
    }
    public function set_contact($NewContact) {
        $this->_contact = (string) $NewContact;
        return $this;
    }

    // FONCTIONS

    public function demarrer() {
        $this->_contact = true;
        echo "<br>le vehicule $this->_marque démarre <br>";
    }
    public function stopper() {
        $this->_contact = false;
    }

    // fonction permettant grâce au booléen,de lier une variable pour déclarer dans quel état est le véhicule
    public function getEtat() {
        if($this->_contact) {
            $etat = "démarré";
        } else {
            $etat = "stoppé";
        }
        return $etat;
    }


    public function accelerer($vitesse) {
        // Pas besoin de dire à la fonction si c'est démarrer ou non car "($this->_contact)" prend par défaut quand la situation est vrai 
        // sinon on aurait du mettre (!$this->_contact) pour qu'il prenne par défaut faux
        if($this->_contact) {
            $this->_vitesseActuelle += $vitesse;
            echo "Le véhicule $this->_marque accélère de $this->_vitesseActuelle km/h<br>";
        } else {
            echo "<br>Pour accélérer, le vehicule $this->_marque doit être démarré !<br>";
        }
    }

    public function ralentir($vitesse) {
        if($this->_contact) {
            $this->_vitesseActuelle -= $vitesse;
            if($this->_vitesseActuelle < 0) {
                echo "le véhicule est à l'arrêt<br>";
                return $this->_vitesseActuelle = 0;
            } else {
                echo "Le véhicule $this->_marque ralentit à $this->_vitesseActuelle km/h<br>";
            }
            
        } else {
            echo "Pour ralentir, le vehicule $this->_marque doit être démarré !<br>";
        }
    }

    public function afficherVitesse() {
        echo "La vitesse du vehicule $this->_marque est de : $this->_vitesseActuelle km/h<br>";
    }

    public function __toString() {
        return "<br>Info $this->_ID <br> 
        ********************<br> 
        Nom et modèle de véhicule : $this->_marque $this->_modele <br>
        Nombre de portes : $this->_nbPortes <br>
        Le véhicule $this->_marque est ". $this->getEtat()." <br>
        Sa vitesse est de $this->_vitesseActuelle km/h<br>";
    }

}

echo $v2;
$v1->demarrer();
$v1->accelerer(50);
$v1->ralentir(60);
$v1->afficherVitesse();
echo $v1;

$v2->accelerer(60);
$v2->afficherVitesse();

// SOURCE :
// https://www.php.net/manual/fr/function.is-bool.php
// https://stackoverflow.com/questions/4933100/php-function-returning-boolean
