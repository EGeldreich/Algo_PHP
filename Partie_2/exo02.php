<h1>Exercice 02</h1>

<p>Soit le tableau suivant : <br>
<code> $capitales = [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]; </code><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays <br>
s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à <br>
une fonction personnalisée. <br>
Vous devrez appeler la fonction comme suit : <code>afficherTableHTML($capitales);</code></p>

<h2>Resultat :</h2>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];



function afficherTableHTML($capitales) {
    ksort($capitales);
    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead>
                    <tbody>";
    foreach ($capitales as $pays => $capitale) {
        
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }
    $result .= "</tbody></table>";

    return $result;
}

echo afficherTableHTML($capitales);