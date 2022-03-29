<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")</p>
<h2>Exemple : </h2>
<p>
afficherRadio($nomsRadio);
</p>

<h2>RESULTAT</h2>

<?php 

$nomsRadio = ['Masculin' => '', 'Féminin' => '', 'Autre' => ''];

function afficherRadio(array $input) {
    $return = '';

    foreach ($input as $val => $check) {
        $return .= "<input type='radio' $check name='genre' value='$val'> <label for='$val'> $val </label> <br>";
    }

    return $return;
}
echo afficherRadio($nomsRadio);

// Identique à l'exercice 7