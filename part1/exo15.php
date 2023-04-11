<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>
<p>$p1 = new Personne("DUPONT","Michel", "1980-02-19");<br>
$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php

class Personne { // Une classe est un ensemble de code, un moule, permettant de créer un objet, définissant ses propriétés et ses comportements. (propiétés = attributs, comportements = méthodes)
// L'objet est une instance d'une classe (une représentation matérielle ou immatériel du réel).

    public string $nomPersonne;
    public string $prenomPersonne; 
    public \DateTime $dateDeNaissance;

public function __construct(string $nom, string $prenom, string $dateDeNaissance){  // Le Constructeur me permettra de créer une instance de la classe "Personne" à l'appel d'une , elle est appelé automatiquement à la création de l'objet 
// Construct est une méthode magique
    $this->nomPersonne = $nom;
    $this->prenomPersonne = $prenom;
    $this->dateDeNaissance = new DateTime($dateDeNaissance); // Une instance 
}

// Le principe d'encapsulation. La portée d'une variable ou foncition.
// private : une propriété ou méthode private sera accessible uniquement au sein de la classe;
// public :  une propriété ou méthode public sera accessible au sein de la classe mais aussi en dehors


/**
 * Get the value of nom
 */
public function getNom() {
    return $this->nom;
}

/**
 * Set the value of nom
 * 
 * @return self
 */
public function setNom($nom) {
    $this->nom = $nom;

    return $this;
}

    /**
     * Get the value of prenom
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     * 
     * @return self
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDateDeNaissance() {
        return $this->dateDeNaissance;
    }

    /**
     * Set the value of dateDeNaissance 
     * 
     * @return self
     */
    public function setDateDeNaissance($dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

public function calculerAge() { // Les méthodes sont les actions qu'on applique à un objet, ce sont des fonctions
    $today = new \DateTime('now');
    
    $interval = date_diff($this->dateDeNaissance, $today); // Attention à "jeter" le symbole dollar

    return $interval->y;
}

public function __toString() { // Les Méthodes magiques sont des fonctions natives qui sont appelés automatiquement durant des événements particuliers 
    return $this->prenomPersonne." ".$this->nomPersonne." a ".$this->calculerAge()." ans <br>"; 
}

}

$p1 = new Personne("DUPONT","Michel", "1980-02-19");

$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");

var_dump($p1);
echo "<br>";
echo "<br>";

echo $p1;
echo "<br>";
echo $p2;

?>