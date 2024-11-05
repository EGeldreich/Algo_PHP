<h1>Exercice 06</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité<br>
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Resultat :</h2>

<?php

$prix = 9.99;
$quantity = 5;
$tva = 0.2;

$result = ($prix * $quantity) * ($tva + 1);


echo "Prix unitaire de l'article : $prix €<br>";
echo "Quantité : $quantity<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : $result €";
