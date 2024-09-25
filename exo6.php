<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d'articles, son prix hors taxe et un taux de TVA <br>(exprimé en décimal. <b>Ex</b> : 20% -> 0.2)</p>

<h2>Résultat</h2>

<?php

// On déclare les variables 
$prix = 9.99;
$quantite = 5;
$tauxTVA = 0.2;

// On calcule le prix avec la TVA
$montantTotal = $prix * $quantite * (1 + $tauxTVA);

// On affiche le résultat
echo "Prix unitaire de l'article : $prix €<br>";
echo "Quantité : $quantite<br>";
echo "Taux TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $montantTotal €";