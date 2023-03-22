<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui<br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et<br> 
1€.<br>
Affichage :<br>
Montant à payer : 152 €<br>
Montant versé : 200 €<br>
Reste à payer : 48 €<br>
***************************************************<br>
Rendue de monnaie : 4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p>

<h2>Résultat</h2>

<?php

$montant = 152;
$versement = 200;
$reste = $versement - $montant;
$nbr10E = 0;
$nbr5E = 0;
$nbr2E = 0;

echo "Montant à payer : $montant €<br>
Montant versé : $versement €<br>
Reste à payer : $reste €<br>
***************************************************<br>";

while ($reste > 10) {
    $reste -= 10;
    $nbr10E++;
}if ($reste > 5) {
    $reste -= 5;
    $nbr5E++;
} while ($reste > 2) { 
    $reste -= 2;
    $nbr2E++;  
}

echo "Rendue de monnaie : $nbr10E billets de 10 € - $nbr5E billet de 5 € - $nbr2E pièce de 2 € - $reste pièce de 1 €<br>";