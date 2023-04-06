<h1>Exercice 10 - Partie 2</h1>


<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet</br>  
qui contient les informations suivantes: champs de texte avec nom, prénom, adresse e-</br>
mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation:</br>
«Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».</p>
<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement</br> 
de validation (submit).</p>

<h2>Résultat</h2>

<?php

$infosInput = array("nom", "prénom", "adresse", "e-mail", "ville", "sexe");
$intitulé = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

function afficherInput($infosInput, $intitulé){
    echo "<form method='post' action='form.php' style='background-color:#ececec; width: 350px'>";
foreach($infosInput as $value) {
    echo "<label>$value<br><input type='text' value=''/></label></br>";
}
    echo "<select name='Intitulé' size='1'>";
foreach($intitulé as $value2) { 
    echo "<option>'$value2'</option>";
}
echo "</select></br>";
echo "<label><input type='submit' value''/></label>";
echo "</form>";
}
afficherInput($infosInput, $intitulé);