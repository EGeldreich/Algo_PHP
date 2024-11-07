<h1>Exercice 07</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
<strong>Exemple :</strong><br>
<code>
    genererCheckbox($elements); <br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
</code>
</p>

<h2>Resultat :</h2>

<?php

$elements = [
    "Choix 1" => "check",
    "Choix 2" => "check",
    "Choix 3" => "uncheck"
];

function generateCheckboxes($elements) {
    $result = "<form>"; // Open form

    foreach($elements as $label => $status) { // For each element ->
        if($status == "check"){ // If checked, create an already checked checkbox
            $result .= "<input type='checkbox' checked>";
        } else { // if not checked, create an empty checkbox
            $result .= "<input type='checkbox'>";
        }
        $result .= "<label>$label</label><br>"; //add the label with apropriate name
    }
    $result .= "</form>"; // close form
    return $result;
}

echo generateCheckboxes($elements);