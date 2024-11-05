<h1>Exercice 05</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Resultat :</h2>

<?php

$francs = 100;

$euros = number_format($francs / 6.55957, 2);

echo "Montant en francs : $francs <br>";
echo "$francs francs = $euros euros";