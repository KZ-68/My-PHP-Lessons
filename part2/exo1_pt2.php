<h1>Exercice 1 - Partie 2</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de<br> 
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);<br>
Affichage(si $texte = «Mon texte en paramètre»)<br>
MON TEXTE EN PARAMETRE</p>

<h2>Résultat</h2>

<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte) {
    echo mb_strtoupper('<span style="color: red; font-size: 25px;">'.$texte.'</span>');
}

echo convertirMajRouge($texte);