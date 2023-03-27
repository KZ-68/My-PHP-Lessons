<h1>Exercice 5 - Partie 2</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br> 
précisant le nom des champs associés.</p>
Exemple:<br>
<p>$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);</p>

<h2>Résultat</h2>



<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
    echo "<form method='post' action='form.php' style='background-color:#ececec; width: 200px'>";
    foreach($nomsInput as $value) {
    echo "<label>$value<br><input type='text' value=''/></label><br>";
}
echo "<label><input type='submit' value''/></label>";
echo "</form>";
}
afficherInput($nomsInput);
?>

