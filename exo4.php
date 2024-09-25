<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne"; // On déclare la phrase que l'on va analyser
$nvPhrase = strtolower(str_replace( " ", "",$phrase)); // On réduit les caractères uniformément et on remplace les espaces par rien pour concaténer les lettres ensemble
$comparaison = strrev($nvPhrase); // On retourne le sens de la phrase, la faisant commencée par le "e" de "gagne"

// On fait la comparaison entre la phrase initiale et la phrase inversée pour évaluer si elle corresponde
if($nvPhrase == $comparaison){
    echo "La phrase « $phrase » est un palindrome"; // Si oui, alors c'est un palindrome
} else {
    echo "La phrase « $phrase » n'est pas un palindrome"; // Si non, ce n'est pas un palindrome
}