<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de <br>
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Resultat :</h2>

<?php 

$gradesTable = [10 , 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9];

$gradesString = implode(" " , $gradesTable);

$totalGrade = 0;

foreach($gradesTable as $grade) {
    $totalGrade = $totalGrade + $grade;
}

$average = round(($totalGrade / count($gradesTable)) , 2);

echo "Les notes obtenues par l'élève sont : $gradesString.<br>";
echo "Sa moyenne générale est donc de : $average.";