<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Resultat :</h2>

<?php

$price = 152;
$paid = 200;
$due = $paid - $price;

$ten = floor($due / 10);
$dueMinusTens = $due - ($ten*10);

$five = floor($dueMinusTens/5);
$dueMinusFives = $dueMinusTens - ($five*5);

$two = floor($dueMinusFives/2);
$dueMinusTwos = $dueMinusFives - ($two*2);

$one = floor($dueMinusTwos/1);

if ($ten > 1) {
    $pluralTen = "billets";
} else {
    $pluralTen = "billet";
}

if ($five > 1) {
    $pluralFive = "billets";
} else {
    $pluralFive = "billet";
}

if ($two > 1) {
    $pluralTwo = "pièces";
} else {
    $pluralTwo = "pièce";
}

echo "Montant à payer : $price €<br>";
echo "Montant versé : $paid €<br>";
echo "Reste à rendre : $due €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie :<br>";
echo "$ten $pluralTen de 10€ - $five $pluralFive de 5€ - $two $pluralTwo de 2€ - $one pièce de 1€";