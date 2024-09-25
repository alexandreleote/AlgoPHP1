<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d'afficher le nombre de marques de voitures présentes dans le tableau.<br>
<b>Exemple</b> : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
 </p>

<h2>Résultat</h2>

<?php

$tableauMarques = ["Peugeot", "Renault", "BMW", "Mercedes"]; // array des marques
$nbrMarques = count($tableauMarques); // compte le nombre d'éléments dans l'array

echo "Il y a $nbrMarques marques de voitures dans le tableau :<br>";
foreach ($tableauMarques as $marque) { // Pour chaque élément présent dans le tableau on renvoie chaque élément dans la valeur définie
    echo $marque."<br>";
}