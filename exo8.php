<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :<br>
Affichage(pour la table de 8):<br>
Table de 8:<br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24 ...<br>
Remarque: proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

$firstVar = 8;
$secondVar = 10;

for ($i=1 ; $i<=$secondVar ; $i++) {
    echo "\t", $firstVar, " * ", $i, " = ", $firstVar * $i, "\n <br>";
}

echo "<br>";

$a = 8;


$j = 1; 
while ($j <= 10) {
    echo "\t", $a, " * ", $j, " = ", $a * $j, "\n <br>"; 
    $j++;
}   

