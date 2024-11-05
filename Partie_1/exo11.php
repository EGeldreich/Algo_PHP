<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce <br>
tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé <br>
d'afficher le nombre de marques de voitures présentes dans le tableau.<br>
<strong>Exemple</strong> : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</p>

<h2>Resultat :</h2>

<?php

$brands = ["Peugeot" , "Renault" , "BMW" , "Aston Martin" , "Alpine"];
$number = count($brands);

echo "Il y a $number marques de voitures dans le tableau <br>";
echo "<ul>";
// for ($i = 0; $i < $number; $i++) {
//     echo "<li> $brands[$i] </li>";
// }
foreach($brands as $i) {
    echo "<li> $i </li>";
}
echo "</ul>";
