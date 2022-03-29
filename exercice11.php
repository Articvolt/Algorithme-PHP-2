<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>
<h3>Exemple</h3>
<p>
formaterDateFr("2018-02-23");  
</p>

<h2>RESULTAT</h2>

<?php 

$date = "2018-02-23";

function formaterDateFR(string $date) {

    // Passage du string 'date' en format date
    $frdate = new DateTime($date);

// Format de l'heure en FR complet et pas en format grégorien ou traditionnelle (PST, Etc)
    $format = new IntlDateFormatter('fr_FR',IntlDateFormatter::FULL,IntlDateFormatter::FULL,'Europe/Paris',IntlDateFormatter::GREGORIAN,'d/m/Y HH:mm:ss');

    return $format ->format($frdate);
}

echo formaterDateFR($date);
echo "<br>";

// Voir le calcul de conversion du timestamp par l'ordinateur en date 
echo time();
echo "<br>";
$time = time();
$format = new IntlDateFormatter('fr_FR',IntlDateFormatter::FULL,IntlDateFormatter::FULL,'Europe/Paris',IntlDateFormatter::GREGORIAN,'d/m/Y HH:mm:ss');
echo $format->format($time);


// timestamp recherche ( 01/01/1970 ?)
// local puis type de date puis type de temps puis le timezone 
//  :: methode statique de la classe (a revoir)
// grégorien : Nous utilisons aujourd'hui le calendrier dit grégorien, qui est entré en vigueur à une date précise : le 15 octobre 1582
// datefmt_create() : créé un formateur de date
// datefmt_format() : Formate la valeur date/heure sous forme de chaîne
// IntlDateFormatter:: FULL : Style complétement spécifié -> vendredi 15 semptembre 2018 (par exemple)
// IntlDateFormatter:: NONE : Ne pas inclure cet élément

// Source :
// https://www.php.net/manual/en/intldateformatter.create.php
// https://www.php.net/manual/en/class.intldateformatter.php#intl.intldateformatter-constants