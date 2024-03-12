<?php
class Voiture{
    //Attributs
    private string $couleur;
    private float $poids;
    private int $prix;
    private string $marque;
    
    //Constructeur permet de construire l'objet
    public function __construct(string $uneCouleur, float $unPoids, int $unPrix, string $uneMarque ){
        $this->couleur = $uneCouleur;
        $this->poids = $unPoids;
        $this->prix = $unPrix;
        $this->marque = $uneMarque;
    }

    //Les getters qui permet d'obtenir la valeur des attributs
    public function getCouleur(): string{
        return $this->couleur;
    }
    public function getPoids(): float{
        return $this->poids;
    }
    public function getPrix(): int{
        return $this->prix;
    }
    public function getMarque(): string{
        return $this->marque;
    }

    //Les setters qui permet de changer la valeur de l'attribut
    public function setCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function setPoids(float $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function setPrix(int $nouveauPrix): void{
        $this->prix = $nouveauPrix;
    }
    public function setMarque(string $nouvelleMarque): void{
        $this->marque = $nouvelleMarque;
    }

    //methode toString() permet d'afficher de la maniere qu'on decide l'objet
    public function __toString() : string{
        return  "Couleur : " . $this->couleur."<br>".
                "Poids : " . $this->poids." Kg<br>".
                "Prix : " . $this->prix ." Euros<br>".
                "Marque : " . $this->marque ."<br><br>";
    }

    //methode de fonctions
    public function augmenterPrix(int $augmentation): void{
        //$this->prix =$this->prix + $augmentation;
        $this->prix += $augmentation;
    }

    public function demarrer(): void{
        echo "La voiture demarre<br>";
    }
    public function accelerer(): void{
        echo "La voiture accelere<br>"; 
    }

    // public function demarrer2(): string{
    //     return "La voiture demarre version 2";
    // }

    public function plusChere(Voiture $uneVoiture): bool{
        if($this->prix > $uneVoiture->getPrix()){
            return true;
        }
        return false;
        //version plus direct
        //return $this->prix > $uneVoiture->obtenirPrix();
    }

    
 

}
