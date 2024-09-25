<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php

$facture = 152;
$paiement = 200;
$reste = abs($facture - $paiement); // On utilise abs() pour rendre positive la valeur négative que l'on obtient avec la soustraction. Cela définit le montant à rendre
$monnaies = [1, 2, 5, 10]; // Nos différentes monnaies

// On affiche la facture, on peut faire un echo en utilisant la concaténation
echo "Montant à payer : $facture €<br>"
    ."Montant versé : $paiement €<br>"
    ."Reste à payer : $reste €<br>"
    ."***************************************************<br>"
    ."Rendue de monnaie :<br>";
// On crée la fonction qui permet de rendre la monnaie

$valeur10 = intdiv($reste, $monnaies[3]); // On divise le reste par la valeur du plus grand billet à savoir 10
$reste = $reste - ($valeur10*$monnaies[3]); // On stocke la différence une fois le nombre de billets de 10 rendu
echo $valeur10." billets de 10 € - "; // On affiche combien de billets de 10 € sont rendus et on répète le process pour les autres valeurs

$valeur5 = intdiv($reste, $monnaies[2]);
$reste = $reste - ($valeur5*$monnaies[2]);
echo $valeur5." billets de 5 € - ";

$valeur2 = intdiv($reste, $monnaies[1]);
$reste = $reste - ($valeur2*$monnaies[1]);
echo $valeur2." pièce de 2 € - ";

$valeur1 = intdiv($reste, $monnaies[0]);
$reste = $reste - ($valeur1*$monnaies[0]);
echo $valeur1." pièce de 1 €";
