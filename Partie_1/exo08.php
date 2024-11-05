<h1>Exercice 08</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.</p>

<h2>Resultat :</h2>

<?php

$number = 3;

echo "Table de $number avec boucle FOR:<br>";
for ($i = 1; $i < 10; $i++) {
    echo "$i x $number = ".$i*$number."<br>";
}

$i = 1;
echo "<br>Table de $number avec boucle WHILE:<br>";
while ($i < 10) {
    echo "$i x $number = ".$i*$number."<br>";
    $i++;
}
