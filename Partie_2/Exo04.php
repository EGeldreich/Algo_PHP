<h1>Exercice 04</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra <br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un <br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale). <br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : <br>
https://fr.wikipedia.org/wiki/ <br>
Le tableau passé en argument sera le suivant : <br>
<code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</code></p>

<h2>Resultat :</h2>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

function afficherTableHTML($capitales) {
    asort($capitales); // Sort per Value (capitale)
    $result = "<table border=1> 
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead>
                    <tbody>"; // Start creating the table
    foreach ($capitales as $pays => $capitale) { // Add a row for each table key, with needed information and layout
        $link = "https://fr.wikipedia.org/wiki/$capitale"; // customise link for each city
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                        <td><a href='$link' target='_blank'>Lien</a></td>
                    </tr>";
    }
    $result .= "</tbody></table>"; // close table

    return $result;
}

echo afficherTableHTML($capitales);

