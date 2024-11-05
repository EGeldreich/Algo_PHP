<h1>Exercice 02</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Resultat :</h2>

<?php

$sentence = "Notre formation DL commence aujourd'hui";
$words = str_word_count($sentence);

echo "La phrase « Notre formation DL commence aujourd'hui » contient $words mots.";