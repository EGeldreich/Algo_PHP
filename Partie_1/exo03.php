<h1>Exercice 03</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot <br>
« aujourd'hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase</p>

<h2>Resultat :</h2>

<?php

$sentence = "Notre formation DL commence aujourd'hui";
$newSentence = str_replace("aujourd'hui", "demain", $sentence);

echo $sentence."<br>";
echo $newSentence;