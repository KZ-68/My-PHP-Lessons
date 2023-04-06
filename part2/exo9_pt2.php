<h1>Exercice 9 - Partie 2</h1>

<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de</br>
valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>
Exemple:</br>
afficherRadio($nomsRadio);</p>

<h2>Résultat</h2>

<?php


$nomsRadio = array("Monsieur","Madame","Mademoiselle");


function afficherRadio($nomsRadio) {
  $i = 0;
  echo "<form action='RadioPost.php' method='POST' name='formulaire'>";
  foreach($nomsRadio as $value) {
    if($i == 0) { 
      $checked = 'checked';
    } else { 
      $checked = '';
    }
    echo "<input type='radio' id='$value' name='formulaire' value='$value' $checked><label for='$value'>$value</label></br>";
    $i++;
}
  echo "</form>";
}

afficherRadio($nomsRadio);

?>