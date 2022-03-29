<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.
</p>
<h2>Exemple : </h2>
<p>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>RESULTAT</h2>

<?php 

// On peux mettre 'checked' entre '' si on veux qu'une case soit cochée par défaut
$elements = ['Choix 1' => '', 'Choix 2' => '', 'Choix 3' => ''];

function genererCheckbox(array $input) {
    $return = '';

    foreach ($input as $variable => $elements) {
        $return .= "<input type='checkbox' $elements> <label for='$variable' name='$variable' value='$variable'> $variable </label> <br>";
    }

    return $return;
}

echo genererCheckbox($elements);

// value : lorsqu'un formulaire est envoyé, seules les cases cochées sont envoyées au serveur et c'est la valeur de l'attribut value qui est envoyée
// name : indique le nom du contrôle. Toutes les cases à cocher portent un nom différent.

// Source : 
// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/checkbox
// http://www.cfa-digne.fr/site_sec/web/javascript/input_checkbox.html