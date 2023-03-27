<h1>Exercice 4 - Partie 2</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme:</p><br>
https://fr.wikipedia.org/wiki/<br>
<p>Le tableau passé en argument sera le suivant:<br>
$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Résultat</h2>


<?php

$capitales= array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
// $capitales2= ["Espagne"=>"Madrid","Russie"=>"Moscou"];
// $array= ["Pomme","Orange","Poire"];


function afficherTableHTML($tableau) {
    // On ouvre un <table> pour démarrer le tableau
        echo "<table border=1><th>pays</th><th>capitale</th><th>Lien wiki</th>";
            foreach ($tableau as $key => $value){
                echo "<tr><td>".strtoupper($key)."</td><td>".$value."</td><td><a href='https://fr.wikipedia.org/wiki/$value' target='_blank'>Lien</a></td></tr>";
            }   // Pour ajouter un lien hypertexte qui renvoie vers chaque page wiki des capitales par ligne du tableau, il faut ajouter à la fin du lien la valeur $value
        echo "</table>";
    // On n'oublie pas de fermer la balise avec </table>     
}

ksort($capitales);
afficherTableHTML($capitales);

?>