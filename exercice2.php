<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
</p>
<p>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
</p>
<p>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>


<h2>RESULTAT</h2>

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");


function afficherTableHTML(array $tableau) {

    // Trie le tableau par rapport à la clé (keysort), key étant "France",etc
    ksort($tableau);

    // Mise en place de la structure de base du tableau avec son header
    $return = 
    '<table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
            </tr>
        </thead>
        <tbody>';

    // <tr> définit une ligne de tableau
    // <td> donnée d'une cellule de tableau
    // <th> définit l'en-tête d'un tableau
    // <thead> définit l'ensemble des lignes de l'en-tête du tableau
    // <tbody> définit l'ensemble des lignes du corps du tableau

    foreach ($tableau as $pays => $capital) {
        // Application d'une boucle pour que CHAQUE valeurs soient dans le tableau
        $return .= "<tr>
                        <td>".strtoupper($pays)." </td>
                        <td> $capital </td>
                    </tr>";
    }

    // Fermeture du tableau 
    $return .= '</tbody></table>';
   

    return $return;
}

echo afficherTableHTML($capitales);

?>

<!-- Partie CSS -->

<style>
    td, th{
        border: 1px solid black;

    }

    table{
        border-collapse: collapse;
        margin: 1rem;
        font-family: 'Courier New', Courier, monospace;
    }

    tbody td{
        padding:  0 10px;
    }
    
</style>


<!-- Source:
https://developer.mozilla.org/fr/docs/Web/HTML/Element/table -->