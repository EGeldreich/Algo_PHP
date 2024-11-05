<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Resultat :</h2>

<?php 

$table = ["Mickaël" => "FRA" , "Virgile" => "ESP" , "Marie-Claire" => "ENG"];
ksort($table);

foreach ($table as $key => $value) {
    if ($value == "FRA") {
        $greeting = "Salut";
    }
    if ($value == "ESP") {
        $greeting = "Hola";
    }
    if ($value == "ENG") {
        $greeting = "Hello";
    }
    echo "$greeting $key <br>";
}
