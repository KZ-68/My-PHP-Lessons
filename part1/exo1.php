<h1>Exercice 1</h>

<p>Soit la phrase "Notre Formation DL commence aujourd'hui ".<br>
Ecrire un algorithme permettant de compter le nombre de caractère contenus dans cette phrase (espaces inclus)</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);
echo "La phrase  $phrase  contient $longueur caractères<br>";
echo "La phrase  $phrase  contient " .strlen($phrase). " caractères<br>";

?>
