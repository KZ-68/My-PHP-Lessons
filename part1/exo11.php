<h1>Exercice 11</h1>

<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce<br> 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé<br> 
d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»<br>
Affichage(attention à utiliser une liste à puces)<br>
Il y a 4 marques de voitures dans le tableau:<br>
Peugeot<br>
Renault<br>
BMW<br>
Mercedes<p>

<h2>Résultat</h2>

<?php

$x = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbMarques = count($x);

echo "Il y a $nbMarques de voiture dans le tableau:<br>";
for ($i = 0; $i < $nbMarques; $i++) {
    echo "<ul><li>$x[$i].</li></ul>";
}

?>

