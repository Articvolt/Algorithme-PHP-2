<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>
<p>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).  
</p>

<h2>RESULTAT</h2>

<?php 

// Préparation des variables

$formulaires = array("Nom","Prénom","Adresse e-mail","Ville","Sexe");
$metiers = array("Développeur Logiciel","Designer Web","Intégrateur","Chef de projet");

// Fonction créant un formulaire 

function afficherFormulaire(array $formulaire) {
    $return = ' ';

    // Boucle pour chaque variable différentes du tableau
    foreach ($formulaire as $variable) {
        $return .= "<label for='$variable'> <br> $variable <br> <input type='text' name='$variable'> </label>";
    }

    return $return;
}

// Fonction permettant de choisir le métier dans le formulaire

function ListeDeroulante($metier) {
    $return = "<select>";
    foreach ($metier as $val) {
        $return .= "<option value='$val'>$val</option>";
    }
    $return .= "</select>";

    return $return;
}

// Affichage des deux fonctions via un <form...>

function showForm($formulaire,$metier) {

    // method = 'get' : permet d'envoyer au serveur les ressources 
    // action="URL" permet de de donner un point d'arrivée aux données
    $return = "<form method='get'>";
    $return .= afficherFormulaire($formulaire).'<br><br>';
    $return .= ListeDeroulante($metier)."<br><br> <input type='submit'> </form>";
    
    return $return;
}

echo showForm($formulaires, $metiers);

// input type='submit' : permet d'afficher un bouton

// SOURCE :
// https://developer.mozilla.org/fr/docs/Learn/Forms/Sending_and_retrieving_form_data
// https://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html#sec9.3
// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Form

