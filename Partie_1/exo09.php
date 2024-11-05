<h1>Exercice 09</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de <br>
plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).</p>

<h2>Resultat :</h2>

<?php

$age = 12;
$sexe = "F";


echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

if (($sexe == "F" AND ($age >= 18 AND $age <= 35)) OR ($sexe == "M" AND $age >=20)) {
    echo "La personne est imposable";
} else {
    echo "La personne n'est pas imposable";
}
