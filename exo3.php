<h1>Exercie 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot «aujourd'hui» par le mot «demain».
Afficher l'ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$phrase = "«Notre formation DL commence aujourd'hui »";
// stock les mots à remplacer pour utiliser st_replace()
$anciennePhrase = ["aujourd'hui"];
$nouvellePhrase = ["demain"];
$newPhrase = str_replace($anciennePhrase, $nouvellePhrase, $phrase);

echo "L'anciennce phrase est $phrase<br>";
echo "La nouvelle phrase est $newPhrase<br>";
