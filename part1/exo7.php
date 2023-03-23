<h1>Exercice 7</h1>

<p> L’enfant qui a 10 ans appartient à la catégorie « Minime » <br>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:<br> 
Poussin: entre 6 et 7 ans<br>
Pupille: entre 8 et 9 ans<br>
Minime: entre 10 et 11 ans<br>
Cadet: à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

$firstchild = 10;
if ($firstchild >= 12) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Cadet »";
} else if ($firstchild >= 10) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Minime »";
} else if ($firstchild >= 8) {
    echo "L’enfant qui a 10 ans appartient à la catégorie « Pupille »";
} else if ($firstchild >= 6) { 
    echo "L’enfant qui a 10 ans appartient à la catégorie « Poussin »";
} else {
    echo "Catégorie non gérée";
}

?>
