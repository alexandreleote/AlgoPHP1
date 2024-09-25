<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et <b>à partir d'un tableau de prénoms et de langue associée</b> 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un <b>switch</b>.<br>
<b>Exemple</b> : tableau ➔  Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG</p>

<b>Variante</b> : trier d'abord le tableau par ordre alphabétique du prénom</p>

<h2>Résultat</h2>

<?php

// Déclaration du tableau de prénoms et langues associées

// On déclare le tableau avec les prénoms et les langues
$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

// On crée la condition avec un switch
foreach($personnes as $nom => $langue) {
    switch(true) {
        case $langue == "FRA": echo "Salut $nom<br>"; break; // Attention = affecte seulement la valeur 
        case $langue == "ESP": echo "Hola $nom<br>"; break; //  Pour faire une comparaison il faut mettre ==
        default: echo "Hello $nom<br>";
    }
}


echo "<br><b>Variante</b> : trié par ordre alphabétique du prénom<br><br>"; 

ksort($personnes); // On trie par ordre alphabétique sur la clé (clé = prénoms)
foreach($personnes as $nom => $langue) {
    switch(true) {
        case $langue == "FRA": echo "Salut $nom<br>"; break;
        case $langue == "ESP": echo "Hola $nom<br>"; break; 
        default: echo "Hello $nom<br>";
    }
}