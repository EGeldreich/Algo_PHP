<h1>Exercice 01</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de <br>
caractère passée en argument en majuscules et en rouge. <br>
Vous devrez appeler la fonction comme suit : <code>convertirMajRouge($texte);</code></p>

<h2>Resultat :</h2>

<style>
    .red {
        color : red;
    }
</style>

<?php

$text = "mon texte en paramètre";
$text2 = "mon texte dans la couleur de mon choix";

function convertirMajRouge($text) {
    $result = mb_strtoupper($text);
    $result = "<p class='red'>$result</p>";
    return $result;
}

// function convertirMajRougeShorter($text) {
//     return "<p class ='red'>".mb_strtupper($text)."</p>";
// }

function convertirMajColor($text, $color) {
    return "<p style='color:$color'>".mb_strtoupper($text)."</p>";
}

echo convertirMajRouge($text);
echo convertirMajColor($text2, 'blue');