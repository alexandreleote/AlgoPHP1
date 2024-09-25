<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme : <br>
Table de 8 : <br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24<br>
<br>
<b>Remarque</b> : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php


$nombre = 8 ;

// Avec la méthode FOR, on incrémente le nombre de départ du calcul soit 1 à 10 et effectue la multiplication jusqu'à arriver à 10
echo "<h3>Table de 8 : méthode FOR</h3>";
for ($i = 1; $i <= 10; $i++){
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
}

// Avec la méthode WHILE, on incrémente le nombre de départ du calcul soit 1 à 10 et effectue la multiplication tant que l'on n'atteint pas 10
echo "<h3>Table de 8 : méthode WHILE</h3>";
$i = 1;
while($i <= 10) {
    echo $i." x ".$nombre." = ".$i*$nombre."<br>";
    $i++;
}