<h1>Exercice 3</h1>

<p>A  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot<br>
«aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

$nwStr = "Notre formation DL commence aujourd'hui<br>";
echo $nwStr;
$nwStr = str_replace("aujourd'hui","demain", "Notre formation DL commence aujourd'hui");

echo $nwStr;

?>
