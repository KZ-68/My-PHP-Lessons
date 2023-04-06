<h1>Exercice 15 - Partie 2</h1>

<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une</br> 
adresse e-mail a le bon format.</p>
Affichage</br>
L’adresse elan@elan-formation.frest une adresse e-mail valide

<h2>Résultat</h2>

<?php

$mail = "elan@elan-formation.fr";

function verification($mail) {
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    echo("L’adresse contact@elan est une adresse e-mail valide");
 } else {
    echo("L’adresse contact@elan est une adresse e-mail invalide");
  }

}
verification($mail);