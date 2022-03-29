<h1>Exercice 12</h1>

<p>
La fonction var_dump($variable) permet d’afficher les informations d’une variable.</p>

<p>
Soit le tableau suivant :<br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau
</p>

<h2>RESULTAT</h2>

<?php 

$tableauValeurs = array( true, "texte", 10,25.369, array("valeur1","valeurs2"));

function varDump($tableauValeurs) {
    $result="";

    foreach($tableauValeurs as $valeurs) {
        $result.= var_dump($valeurs);
        
    }

    return $result;
}

echo varDump($tableauValeurs);

// Source :
// https://www.w3schools.com/php/func_var_var_dump.asp