<h1>Exercice 7 - Partie 2</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser</br> 
dans le tableau associatif si la case est cochée ou non.</p>
Exemple:</br>
<p>genererCheckbox($elements);</br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultat</h2>

<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="main.css"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 7 - Partie 2</title>
</head>
<body>
<?php

$elements = array("Choix 1","Choix 2","Choix 3");

function genererCheckbox($elements) {
    echo "<div class='elementsCheckbox'>";
    foreach($elements as $value) { 
      echo "<input type='checkbox' name='' id='choix'>";
      echo "<label for='element'>$value</label></br>";
}
echo "</div>";
}
genererCheckbox($elements);
?>
</body>
