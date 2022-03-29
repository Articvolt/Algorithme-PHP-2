<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
</p>
<p>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>



<h2>RESULTAT</h2>


<!-- Mise en place du CSS -->
<style>     
    .rouge{
        color: red;
    }
</style>


<!-- Mise en place du PHP -->
<?php

function convertirMajRouge(string $texte) {
    return '<p class="rouge">'.mb_strtoupper($texte).'</p>';
}

// Définition d'une classe "rouge" pour pouvoir changer le texte en CSS
// https://openclassrooms.com/forum/sujet/changer-de-couleur-en-php

echo convertirMajRouge("mon texte en paramètre");