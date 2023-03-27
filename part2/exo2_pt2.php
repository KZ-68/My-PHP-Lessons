<h1>Exercice 2 - Partie 2</h1>

<p>Soit le tableau suivant:<br>
$capitales= array <br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br> 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br> 
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);<br>
Affichage<br>
Pays Capitale<br>
ALLEMAGNE Berlin<br>
FRANCE Paris<br>
ITALIE Rome<br>
USA Washington<br></p>

<h2>Résultat</h2>

<?php

$capitales= array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
// $capitales2= ["Espagne"=>"Madrid","Russie"=>"Moscou"];
// $array= ["Pomme","Orange","Poire"];

function afficherTableHTML($tableau) {
    // On ouvre un <table> pour démarrer le tableau
        echo "<table border=1><th>pays</th><th>capitale</th>";
            foreach ($tableau as $key => $value){
                echo "<tr><td>".strtoupper($key)."</td><td>".$value."</td></tr>";
            }
        echo "</table>";
    // On n'oublie pas de fermer la balise avec </table>     
}

ksort($capitales);
afficherTableHTML($capitales);
// afficherTableHTML($capitales2); 
// afficherTableHTML($array);

?>