<h1>Exercice 11</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Resultat :</h2>

<?php 

$table = ["Mickaël" => "FRA" , "Virgile" => "ESP" , "Marie-Claire" => "ENG"];

foreach ($table as $key => $value) {
    if ($value == "FRA") {
        $hey = "Salut";
    }
    if ($value == "ESP") {
        $hey = "Hola";
    }
    if ($value == "ENG") {
        $hey = "Hello";
    }
    echo "$hey $key <br>";
}
