<h1>Exercice 3</h1>

<p>A  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot<br>
«aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$str = "Notre formation DL commence Aujourd’hui";
$mot1 = "Aujourd'hui";
$nwMot = "demain";
$str = str_replace($mot1,$nwMot,$str);

echo $str;