<?php


//Définir une classe Employé caractérisée par les attributs : Matricule, Nom, Prénom, DateNaissance, DateEmbauche et Salaire.
//1) on cree la classe
class Employe{
    //2) attributs de classe
    private int $matricule;
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private DateTime $dateEmbauche;
    private float $salaire;

    //3) contructeur
    public function __construct(int $unMatricule, string $unNom, string $unPrenom, DateTime $uneDateDeNaissance, DateTime $uneDateEmbauche, float $unSalaire){
        $this->matricule = $unMatricule;
        $this->nom = $unNom;
        $this->prenom = $unPrenom;
        $this->dateDeNaissance = $uneDateDeNaissance;
        $this->dateEmbauche = $uneDateEmbauche;
        $this->salaire = $unSalaire;
    }

    //4) Les getters a faire
    public function getMatricule(): int{
        return $this->matricule;
    }
    public function getNom(): string{
        return $this->nom;
    }
    public function getPrenom(): string{
        return $this->prenom;
    }
    public function getDateDeNaissance(): DateTime{
        return $this->dateDeNaissance;
    }
    public function getDateEmbauche(): DateTime{
        return $this->dateEmbauche;
    }
    public function getSalaire(): float{
        return $this->salaire;
    }

    //5) Les setters
    public function setMatricule(int $unMatricule): void{
        $this->matricule = $unMatricule;
    }
    public function setNom(string $unNom): void{
        $this->nom = $unNom;
    }
    public function setPrenom(string $unPrenom): void{
        $this->prenom = $unPrenom;
    }
    public function setDateDeNaissance(DateTime $unDateDeNaissance): void{
        $this->dateDeNaissance = $unDateDeNaissance;
    }
    public function setDateEmbauche(DateTime $unDateEmbauche): void{
        $this->dateEmbauche = $unDateEmbauche;
    }
    public function setSalaire(float $unSalaire): void{
        $this->salaire = $unSalaire;
    }

    //6) Le toString
    public function __toString(): string{
        return $this->matricule . " | " . $this->nom . " | " .$this->prenom . " | " .$this->salaire ; 
    }

    //Ajouter à la classe la méthode Age( ) qui retourne l’âge de l’employé.
    public function age(): int{
        $aujourdHui = new DateTime();
        $difference = $this->dateDeNaissance->diff($aujourdHui);
        return $difference->y; 
    }

    //Ajouter à la classe la méthode Anciennete( ) qui retourne le nombre d’années d’ancienneté de l’employé.
    public function anciennete(): int{
        $aujourdHui = new DateTime();
        $difference = $this->dateEmbauche->diff($aujourdHui);
        return $difference->y;    
    }

    //Ajouter à la classe la méthode AugmentationDuSalaire( ) qui augmente le salaire de l’employé en prenant en considération l’ancienneté.
    // Si Ancienneté < 5 ans, alors on ajoute 2%. - Si Ancienneté < 10 ans, alors on ajoute 5%. - Sinon si il a plus de 10 ans, on ajoute 10%.
    public function augmentationDuSalaire(): void{
        if($this->anciennete() < 5){
            $this->salaire *=1.02;
        }else if($this->anciennete() < 10){
            $this->salaire *=1.05;
        }else{
            $this->salaire *=1.1;
        }
    }

    //Ajouter la méthode AfficherEmployé() qui affiche les informations de l’employé 
    public function afficherEmploye(): void{
        echo "Matricule : [" . $this->matricule."]<br>Nom complet : [" . strtoupper($this->nom) . " ". ucfirst($this->prenom)."]<br>Age : [" . $this->age()." ans]<br>Ancienneté : [" . $this->anciennete()." année(s)]<br>Salaire : [" .$this->getSalaire() . "€]<br>";
    }



    
}
?>