<h1>Exercice 8 - Partie 2</h1>

<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg</br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
Exemple:</br>
repeterImage($url,4);</p>

<h2>Résultat</h2>

<?php

$url = "<img src='http://my.mobirise.com/data/userpic/764.jpg'>";

function repeterImage($url,$nb) {
    for($i=1;$i<=$nb;$i++) {
    echo $url;
    }
}
repeterImage($url, 4);

?>
