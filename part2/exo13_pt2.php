<h1>Exercice - Partie 2</h1>

<p></p>

<h2>Résultat</h2>

<?php

class Voiture {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $isStart;

public function __construct(string $marqueVoiture, string $modeleVoiture, int $nbPortesVoiture, bool $isStartVoiture = false) {
        $this->marque = $marqueVoiture;
        $this->modele = $modeleVoiture;
        $this->nbPortes = $nbPortesVoiture;
        $this->isStart = $isStartVoiture;
}


public function accélérer(int $accélération) {
        if ($this->isStart) {
             $this->vitesseActuelle += $accélération; // Pour accélérer, prendre la vitesse actuelle et additionner avec la valeur $accélération
             echo "<p>Le véhicule ".$this->getNomComplet()." accélère de ".$accélération." km / h</p>";
        } else {
                echo "<p>Le véhicule ".$this->getNomComplet()." veut accélérer de ".$accélération." km / h </p>";
                echo "<p>Pour accélérer, il faut démarrer le véhicule ".$this->getNomComplet()." !</p>";
        }
}
 
public function ralentir(int $décélération) {
        if ($this->isStart) {
             $this->vitesseActuelle -= $décélération;
             echo "<p>Le véhicule ".$this->getNomComplet()." ralentit de ".$décélération."</p>";
        } else {
                echo "<p>Le véhicule ".$this->getNomComplet()." veut ralentir de ".$décélération." km / h </p>";
                echo "<p>Pour ralentir, il faut démarrer le véhicule ".$this->getNomComplet()." !</p>";
        }
}

 
public function démarrer() {
        if ($this->isStart) {
                echo "<p>La voiture ".$this->getNomComplet()." est déjà démarrée</p>";
        } else {
                $this->isStart = true;
                echo "<p>La voiture ".$this->getNomComplet()." démarre</p>";
        }
 }
 
 public function stopper() {
        if ($this->isStart) {
                $this->isStart = false;
                echo "<p>La voiture ".$this->getNomComplet()." est stoppée</p>";
         } else {
                echo "<p>La voiture ".$this->getNomComplet()." est déjà stoppée</p>";
         }
 }

public function getNomComplet() {
        return $this->marque." ".$this->modele;
}

public function getInfos() {
        echo "Nom et modèle du véhicule : ".$this->getNomComplet()." <br/>
        Nombre de portes : ".$this->nbPortes."<br/>";

        // if ($this->isStart) {
        //         echo "Le véhicule " .$this->getNomComplet()." est démarré <br/>";
        // } else {
        //         echo "Le véhicule " .$this->getNomComplet()." est à l'arrêt <br/>";
        // }

        // 1. préparation de variable avant utilisation
        // $isStartOrNotString = " est à l'arrêt";
        // if ($this->isStart) {
        //         $isStartOrNotString = " est démarré";
        // }
        // echo "Le véhicule " .$this->getNomComplet()." $isStartOrNotString <br/>";

        // 2. opérateur ternaire : condition ? siVrai : sinon
        echo "Le véhicule " .$this->getNomComplet()." est ".($this->isStart ? " démarré" : " à l'arrêt")." <br/>";
        
        echo "Sa vitesse actuelle est de ".$this->vitesseActuelle." km / h</p>";
}

public function getMarque(){
        return $this->marque;
    }

public function getModele(){
        return $this->modele;
    }

public function getNbPortes(){
        return $this->nbPortes;
    }

public function getVitesse() {
        echo "<p>La vitesse du véhicule ".$this->getNomComplet()." est de ".$this->vitesseActuelle." km / h </p>";
        return $this->vitesseActuelle;
}

public function getIsStart() {
        return $this->isStart;
    }

public function setMarque($marqueVoiture) {
        $this->marque = $marqueVoiture;
    
        return $this;
    }

public function setModele($modeleVoiture) {
        $this->modele = $modeleVoiture;
    
        return $this;
    }

public function setNbPortes($nbPortesVoiture) {
        $this->nbPortes = $nbPortesVoiture;
    
        return $this;
    }

public function setisStart($isStartVoiture) {
        $this->isStart = $isStartVoiture;

        return $this;
    }


public function setVitesse($vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
}

}

$v1 = new Voiture("Peugeot","408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

$v1->démarrer();
$v1->accélérer(50);
$v2->démarrer();
$v2->stopper();
$v2->accélérer(20);
$v1->getVitesse();
$v2->getVitesse();
echo "<p> Info Véhicule 1 <br/>
************************** <br/>";
$v1->getInfos();
echo "<p> Info Véhicule 2 <br/>
************************** <br/>";
$v2->getInfos();
