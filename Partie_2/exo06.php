<h1>Exercice 06</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
<strong>Exemple :</strong><br>
<code>
    $elements = ["Monsieur","Madame","Mademoiselle"]; <br>
    alimenterListeDeroulante($elements);
</code>
</p>

<h2>Resultat :</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function addToDropDown($elements) {
    $result = "<select>";
    foreach($elements as $element){
        $result .= "<option>$element</option>";
    }
    $result .= "</select>";
    return $result;
}


echo addToDropDown($elements);