<h1>Exercice 1</h1>

<p>La phrase «Engage le jeu que je le gagne» est palindrome<br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$str = "Engage le jeu que je le gagne";
// $search = " ";
// $replaceVal = "";
$str = str_replace(" ","",$str);
$lowerCase = strtolower($str);
$inverted = strrev($lowerCase);

if ($inverted == $lowerCase) {
    echo "La phrase '$lowerCase' est palindrome";
} else 
{
    echo "La phrase '$lowerCase' n'est pas palindrome";
}

?>
