<h1>Exercice 6 - Partie 2</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau</br>
de valeurs.</p>
<p>Exemple:</br>
$elements = array("Monsieur","Madame","Mademoiselle");</br>
alimenterListeDeroulante($elements);</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function afficherInput($elements) {
    echo " <form>";
    echo "<select name='' size='1'>";
    foreach($elements as $value) { 
      echo "<option>'$value'</option>";
}
echo "</select>";
echo "</form>";
}
afficherInput($elements);

?>