<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Resultat :</h2>

<?php 

$table = ["Mickaël" => "FRA" , "Virgile" => "ESP" , "Marie-Claire" => "ENG", "Bryan" => "GER"];
ksort($table);

$greetings = ["FRA" => "Salut" , "ESP" => "Hola" , "ENG" => "Hello" , "GER" => "Hallo"];

foreach ($table as $key => $value) {
    $greeting = $greetings[$value];
    echo "$greeting $key <br>";
}