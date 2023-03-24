<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>
Affichage si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985:<br>
Age de la personne: 33 ans 4 mois 4 jours</p>

<h2>Résultat</h2>

<?php


$dateOfBirth = '17-01-1985';
$dob = new DateTime($dateOfBirth);
$current = new DateTime();
$diff = $current->diff($dob); 
echo "La date courante est le :<br>";
echo $current->format('d/m/Y H:i:s');
echo "<br>";
echo "Age de la personne: ".$diff->y." ans ".$diff->m." mois ".$diff->d." jours";
?>