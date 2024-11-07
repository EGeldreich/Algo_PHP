<h1>Exercice 05</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. <br>
<strong>Exemple :</strong><br>
<code>
    $nomsInput = ["Nom","Prénom","Ville"]; <br>
    afficherInput($nomsInput);
</code>
</p>

<h2>Resultat :</h2>

<!-- <form action="">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom"><br>
    <label for="prenom">prénom</label><br>
    <input type="text" name="prénom"><br>
    <label for="ville">ville</label><br>
    <input type="text" name="ville"><br>
</form> -->

<?php

$inputNames = ["Nom", "Prénom", "Ville"];

function afficherInput($inputNames) {
    $result = "<form action=''>";
    foreach($inputNames as $inputName) {
        $result .= "<label for='$inputName'>$inputName</label><br>
                    <input type='text' name='$inputName'><br><br>";
    }
    $result .= "</form>";
    return $result;
}

echo afficherInput($inputNames);