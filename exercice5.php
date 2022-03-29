<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
</p>
<h2>Exemple : </h2>
<p>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);
</p>

<h2>RESULTAT</h2>

<?php 

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput(array $nomsInput) {
    $return = ' ';

    // Boucle pour chaque variable différentes du tableau
    foreach ($nomsInput as $variable) {
        $return .= "<label for='$variable'> <br> $variable <br> <input type='text' name='$variable'> </label>";
    }

    return $return;
}


echo afficherInput($nomsInput);


// label : représente une légende pour un objet sur l'interface utilisateur
// input : créé un contrôle interactif dans un formulaire web qui permet à l'utilisateur de saisir des données
//  $a.=" " : affecte la valeur " " dans la variable $a

// Source :
// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input
// https://www.php.net/manual/fr/language.operators.assignment.php