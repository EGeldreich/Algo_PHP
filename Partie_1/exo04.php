<h1>Exercice 04</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Resultat :</h2>

<?php

$sentence = "Engage le jeu que je le gagne";
$sentenceLower = strtolower($sentence); // Retire les majuscules
$sentenceChars = str_replace(" ", "", $sentenceLower); // retire les espaces
$sentenceReverse = strrev($sentenceChars); // Retourne la phrase
$sentenceCompared = strcmp($sentenceChars , $sentenceReverse); // compare la phrase et la phrase retournée

if ($sentenceCompared == 0) { // 0 indique 2 phrases identiques
    echo "La phrase « $sentence » est un palindrome";
} else {
    echo "La phrase « $sentence » n'est pas un palindrome";
};

