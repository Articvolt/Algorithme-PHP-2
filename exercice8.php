<h1>Exercice 8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran
</p>
<h2>Exemple : </h2>
<p>
repeterImage($url,4);
</p>

<h2>RESULTAT</h2>

<?php 

// variable de l'image
$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage(string $url, int $nb) {
    $return = '';

// boucle for qui se répète tant que i n'est pas égal à 4
    for ($i = 0; $i < $nb; ++$i) {
        $return .= "<img src='$url' alt='sympa'>";
    }

    return $return;
}

echo repeterImage($url, 4);


