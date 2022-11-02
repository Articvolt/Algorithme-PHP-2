<h1>Exercice 15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
</p>

<h2>RESULTAT</h2>

<?php 

$email1 = new Mail ("elan@elan-formation.fr");
$email2 = new Mail ("contact@elan");

class Mail {
    private string $_email;

    public function __construct(string $email) {
        $this->_email = $email;
    }


// GETTER
    public function get_email() {
        return $this->_email;
    }
    
// SETTER

    public function set_email($NewEmail) {
        $this->_email = $NewEmail;
        return $this;
    }
    
    function verifEmail() {
        if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email '$this->_email' est considérée comme valide.<br>";
        } else {
            echo "L'adresse email '$this->_email' est considérée comme invalide.<br>";
        }
    }
}

echo $email1->verifEmail();
echo $email2->verifEmail();

// SOURCE : 
// https://www.php.net/manual/fr/filter.examples.validation.php