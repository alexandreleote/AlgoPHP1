<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>


<h2>Résultat</h2>

<?php

// On déclare le tableau de notes
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// On procède au calcul de la moyenne en comptant le nombre de notes à diviser au total de celles-ci
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenneNotes = round($sommeNotes / $nbNotes, 2);

// On affiche les notes obtenues à la suite ainsi que la moyenne de celles-ci
echo "Les notes obtenues par l'élève sont : ";
foreach($notes as $note) {
    echo $note." ";
}
echo "<br>Sa moyenne générale est donc de : $moyenneNotes";