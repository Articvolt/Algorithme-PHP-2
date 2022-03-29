<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
</p>
<h2>Exemple : </h2>
<p>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);
</p>

<h2>RESULTAT</h2>

<?php 

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements) {
    $return = "<select>";

    foreach ($elements as $val) {
        $return .= "<option value='$val'>$val</option>";
    }
    
    $return .= "</select>";

    return $return;
}

echo alimenterListeDeroulante($elements);

// select : balise qui permet de choisir une option dans une liste
// option : élément interne à la balise "select"

// Source :
// https://www.irit.fr/~Remi.Bastide/Teaching/PHP/scripts/forms.php
// https://www.xul.fr/html5/option.php