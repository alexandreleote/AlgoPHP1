<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. <br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

// On déclare les variables
$monnaieFrancs = 100 ;

// Pour connaître le taux de conversion on divise les francas par les euros, soit 100 / 15.24 et on obtient 6.56

$conversion = round($monnaieFrancs / 6.56, 2); // On prend soin de définir que l'on arrondie à 2 décimales après la virgule

// On affiche le résultat
echo "Montant en francs : $monnaieFrancs<br>" ;
echo "$monnaieFrancs francs = $conversion €";