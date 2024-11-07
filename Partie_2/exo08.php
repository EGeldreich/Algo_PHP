<h1>Exercice 08</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
<strong>Exemple :</strong><br>
<code>repeterImage($url,4);</code></p>

<h2>Resultat :</h2>

<?php

$imgNumber = 4;

function repeatImg($x) {
    $link = "http://my.mobirise.com/data/userpic/764.jpg"; // href variable to change more easily
    $linkAlt = "Dog chewing a flipflop"; // same logic for Alt
    $result = "<img src='$link' alt='$linkAlt'>"; // create html element with proper href and alt
    for ($i = 1; $i <= $x; $i++) { // loop for X number of times
        echo "$result";
    }
}

echo repeatImg($imgNumber);