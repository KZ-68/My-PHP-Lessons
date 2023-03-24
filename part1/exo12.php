<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée<br> 
(tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue<br> 
respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)<br>
Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG<br>
Affichage:<br>
Salut Mickaël<br>
Hola Virgile<br>
Hello Marie-Claire<br>
Variante: trier d’abord le tableau par ordre alphabétique du prénom<br>
Affichage:<br>
Hello Marie-Claire<br>
Salut Mickaël<br>
Hola Virgile</p>

<h2>Résultat</h2>

<?php 

$group = ['Mickaël' => "FRA", 'Virgile' => "ESP", 'Marie-Claire' => "ENG"];


function salutation($surname, $lang) {

    switch ($lang) {
            case "FRA" : echo "Salut " .$surname. "<br/>";break;
            case "ESP" : echo "Hola " .$surname. "<br/>";break;
            case "ENG" : echo "Hello " .$surname. "<br/>";break;
           
            default : echo "Langue non géré pour ".$surname."<br/>";break;
        } 
    }
    
    foreach ($group as $surname => $lang) {
    
        salutation($surname, $lang);
    }

?>
    
