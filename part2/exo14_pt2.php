<h1>Exercice 14 - Partie 2</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec<br>
qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>
<p>Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques<br>
suivantes:</p>
<p>Peugeot 408: $v1 = new Voiture("Peugeot","408");<br>
BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);</p>
<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:</p>
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";</p>

<h2>Résultat</h2>

<?php

class Voiture {
    protected string $marque;
    protected string $modele;

public function __construct($marqueVoiture, $modeleVoiture) {
    $this->marque = $marqueVoiture;
    $this->modele = $modeleVoiture;
}

public function getInfos() {
    return "<p>Les informations du véhicule sont :<br/> Marque : ".$this->marque." <br/> Modèle : ".$this->modele."</p>";
    
}

public function getMarque(){
    return $this->marque;
}

public function getModele(){
    return $this->modele;
}

public function setMarque($marqueVoiture) {
    $this->marque = $marqueVoiture;

    return $this;
}

public function setModele($modeleVoiture) {
    $this->modele = $modeleVoiture;

    return $this;
}

}

class VoitureElec extends Voiture {
    protected $autonomie;

public function __construct($marqueVoiture, $modeleVoiture, $autonomieVoiture) {
        parent::__construct($marqueVoiture, $modeleVoiture); // appel au constructeur parent en 1ère ligne
        // $this->marque = $marqueVoiture;
        // $this->modele = $modeleVoiture;
        $this->autonomie = $autonomieVoiture;
    }
    

public function getInfos() {
    return "Les informations du véhicule sont :<br/> Marque : ".$this->marque." <br/> Modèle : ".$this->modele." <br/> Autonomie : ".$this->autonomie."";
    
}

public function getAutonomie(){
     return $this->autonomie;
}

public function setAutonomie($autonomieVoiture) {
    $this->autonomie = $autonomieVoiture;

    return $this;
}

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);


echo $v1->getInfos(). "<br/>";
echo $ve1->getInfos(). "<br/>";