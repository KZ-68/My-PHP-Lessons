<h1>Exercice 9</h1>

<p>Affichage :<br>
Age: 32<br>
Sexe: F<br>
La personne est imposable.<br>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br> 
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de<br> 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</p>

<h2>Résultat</h2>

<?php


$age = 34;

$sexe = "F";




if ($age > 20 && $sexe == "H" || $sexe == "F" && $age >= 18 && $age <= 35 ) {
    echo 
   
    "La personne est imposable";

} else {
    echo "non imposable";
}

?>
