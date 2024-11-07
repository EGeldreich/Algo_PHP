<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire <br>
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail,<br>
 ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Resultat :</h2>

<?php

$formLabels = ["Nom", "Prénom", "Email", "Ville",];
$radioLabels = ["Homme", "Femme", "Autre"];
$formationLabels = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];


function generateForm($info, $sexe, $formation) {
    $result = "<form>"; // Open form

    foreach($info as $infoLabel){ // create label and input text for each information
        $result .= "<label for='$infoLabel'>$infoLabel</label><br>
                    <input type='text' name='$infoLabel' required /><br><br>";
    }

    foreach($sexe as $sexeLabel) { // create label and radio input for each information
        $result .= "<input type='radio' name='sexe'><label>$sexeLabel</label><br>";
    }
    
    $result .= "<br><select>"; // open select for drop down
    
    foreach($formation as $formationLabel) { // add drop down options
        $result .= "<option>$formationLabel</option><br>";
    }

    $result .= "</select><br><br><input type='submit'></form>"; // close everything
    
    return $result;
}

echo generateForm($formLabels, $radioLabels, $formationLabels);