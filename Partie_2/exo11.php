<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.<br>
<strong>Exemple :</strong><br>
<code>formaterDateFr("2018-02-23");</code></p>

<h2>Resultat :</h2>

<?php


// function formateDateFr($givenDate){
//     $date = date_create($givenDate);
//     echo date_format($date, 'l d F Y');
// }
// DONNE LE RESULTAT EN ANGLAIS

function formateDateFr($givenDate){
    $fmt = new IntlDateFormatter('fr_FR'); // create new date format, here I juste need French
    $fmt->setPattern('EEEE dd MMMM YYYY'); // set the format pattern 
    $date = date_create($givenDate); // transform the given date into a DateTime
    return $fmt->format($date); // Return de date with our created format
}

echo formateDateFr("2018-02-23");