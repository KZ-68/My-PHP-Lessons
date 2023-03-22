<h1>Exercice</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de<br> 
coefficient). Elle devra être affichée avec 2 décimales.<br>
Affichage:<br>
Les notes obtenues par l’élève sont: 10 12 8 19 3 16 11 13 9<br>
Sa moyenne générale est donc de: 11.22<p>

<h2>Résultat</h2>

<?php

echo moyenneEleve([10, 12, 8, 19, 3, 16, 11, 13, 9]);

function moyenneEleve(array $notes) : float {

$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "Les notes obtenues par l’élève sont: 10, 12, 8, 19, 3, 16, 11, 13, 9 <br>" ;
echo "Sa moyenne générale est donc de: ";
return $moyenne;
}



