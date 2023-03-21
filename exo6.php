<h1>Exercice 6</h1>

<p> Prix unitaire de l’article: 9.99 € <br>
Quantité: 5 <br>
Taux de TVA: 0.2 <br> 
Le montant de la facture à régler est de : 59.94 €<br>
Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité <br>
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)<p>

<h2>Résultat</h2>

<?php

$tauxTVA = 0.2;
$nbrArticle = 5;
$prixHT = 9.99;
$totalHT = $nbrArticle * $prixHT;
$montantTTC = $totalHT * (1 + $tauxTVA);
echo "Prix unitaire de l’article: $prixHT € <br>
Quantité: $nbrArticle <br>
Taux de TVA: $tauxTVA <br> 
Le montant de la facture à régler est de : $montantTTC €";

