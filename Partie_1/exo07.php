<h1>Exercice 07</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
<strong>Poussin</strong> : entre 6 et 7 ans <br>
<strong>Pupille</strong> : entre 8 et 9 ans <br>
<strong>Minime</strong> : entre 10 et 11 ans <br>
<strong>Cadet</strong> : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>


<h2>Resultat :</h2>

<?php

$age = 13;

if ($age >=6) {
    $cat = "Poussin";
}
if ($age >=8) {
    $cat = "Pupille";
}
if ($age >=10) {
    $cat = "Minime";
}
if ($age >=12) {
    $cat = "Cadet";
}

if ($age < 6) {
    echo "L'enfant qui a $age ans est trop jeune pour être dans une catégorie.";
} else {
    echo "L'enfant qui a $age ans appartient à la catégorie « $cat »";
}

// if ($age < 6) {
//     echo "L'enfant qui a $age ans est trop jeune pour être dans une catégorie.";
// }

// if ($age > 6) {
//     if ($age == 6 or $age ==7) {
//         $cat = "Poussin";
//     }
//     if ($age == 8 or $age ==9) {
//         $cat = "Pupille";
//     }
//     if ($age == 10 or $age ==11) {
//         $cat = "Pupille";
//     }
//     if ($age > 11) {
//         $cat = "Cadet";
//     }
//     echo "L'enfant qui a $age ans appartient à la catégorie « $cat »";
// }

