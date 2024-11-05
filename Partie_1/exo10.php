<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Resultat :</h2>

<?php

$price = 152;
$paid = 200;
$due = $paid - $price;

$ten = floor($due / 10);
$dueMinusTens = $due - ($ten*10;

$five = floor($dueMinusTens/5);
$dueMinusFives = $dueMinusTens - $five;

$two = floor($dueMinusFives/2);
$dueMinusTwos = $dueMinusFives - $two;

$one = floor($dueMinusTwos/1);

echo "$ten <br>";
echo "left : $dueMinusTens <br><br>";
echo "$five <br>";
echo "$two <br>";
echo "$one <br>";

echo "Montant à payer : $price €<br>";
echo "Montant versé : $paid €<br>";
echo "Reste à rendre : $due €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie :<br>";
// echo "$ten billets de 10€ - $five billets de 5€ - $two pièce de 2€ - $one pièce de 1€";