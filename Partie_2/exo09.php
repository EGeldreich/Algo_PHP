<h1>Exercice 09</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de<br>
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
<strong>Exemple :</strong><br>
<code>afficherRadio($nomsRadio);</code></p>

<h2>Resultat :</h2>

<?php

$radioElements = ["Choix 1", "Choix 2", "Choix 3", "Autre", "Tout ça finalement"];

function generateRadio($elements) {
    $result = "<form>"; // Open form

    foreach($elements as $label) { // For each element ->
         $result .= "<input type='radio'> 
                    <label>$label</label><br>"; //add the label with apropriate name
    }
    $result .= "</form>"; // close form
    return $result;
}

echo generateRadio($radioElements);
