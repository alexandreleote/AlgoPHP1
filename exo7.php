<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge : <br>
<ul>
    <li><b>Poussin</b> : entre 6 et 7 ans </li>
    <li><b>Pupille</b> : entre 8 et 9 ans </li>
    <li><b>Minime</b> : entre 10 et 11 ans </li>
    <li><b>Cadet</b> : à partir de 12 ans </li>
    <li>Si la catégorie n'est pas gérée, merci de le préciser</li>
</ul></p>

<h2>Résultat</h2>

<?php

// On déclare notre variable âge
$age = 10;

// On déclare notre condition lié à l'âge
if ($age >= 6 && $age <= 7) {
    $categorie = "Poussin";
} else if ($age >=8 && $age <= 9) {
    $categorie = "Pupille";
} else if ($age >= 10 && $age <= 11) {
    $categorie = "Minime" ;
} else if ($age >= 12) {
    $categorie = "Cadet" ;
} else {
    $categorie = "Non gérée" ;
}

// On affiche le résultat
echo "L'enfant qui a $age ans appartient à la catégorie « $categorie » <br>";
