<h1>Exercice 4</h1>

<p>
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
</p>
<p>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
</p>
<p>
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
</p>

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
                <th>Lien wiki</th>
            </tr>
        </thead>
        <tbody>';

    foreach ($tableau as $pays => $capital) {
       
// Ajout d'une ligne en format lien avec la variable intégrée    
        $return .= "<tr>
                        <td>".strtoupper($pays)." </td>
                        <td> $capital </td>
                        <td> <a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>Lien</a> </td>
                    </tr>";
    }

   
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