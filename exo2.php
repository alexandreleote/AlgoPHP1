<h1>Exercie 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = "«Notre formation DL commence aujourd'hui »";
$nbMots = str_word_count($phrase);

echo "La phrase $phrase contient $nbMots mots.<br>";
echo "La phrase $phrase contient ".str_word_count($phrase)." mots.<br>";