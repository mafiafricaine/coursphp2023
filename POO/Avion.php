<?php
class Avion
{
    private string $nom;
    private string $marque;
    private string $pays;
    private float $vitesseMax;
    private int $capacite;

    //Constructeur
    public function __construct(string $unNom, string $uneMarque, string $unPays, float $uneVitesseMax, int $uneCapacite)
    {   //Atribus/propriétés
        $this->nom = $unNom;
        $this->pays = $unPays;
        $this->vitesseMax = $uneVitesseMax;
        $this->marque = $uneMarque;
        $this->capacite = $uneCapacite;
    }

    //les Getters
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function getPays(): string
    {
        return $this->pays;
    }
    public function getVitesseMax(): float
    {
        return $this->vitesseMax;
    }
    public function getCapacite(): int
    {
        return $this->capacite;
    }


    //Les Setters
    public function setNom(string $unNom): void
    {
        $this->nom = $unNom;
    }
    public function setMarque(string $uneMarque): void
    {
        $this->marque = $uneMarque;
    }
    public function setPays(string $unPays): void
    {
        $this->pays = $unPays;
    }
    public function setVitesseMax(float $uneVitesseMax): void
    {
        $this->vitesseMax = $uneVitesseMax;
    }
    public function setCapacite(int $uneCapacite): void
    {
        $this->capacite = $uneCapacite;
    }

    //méthode propre à la classe 
    public function decoller(): void
    {
        echo "L'avion décolle ";
    }

    public function __toString(): string
    {

        return "Nom : " . $this->nom . "<br>" .
            "Marque : " . $this->marque . "<br>" .
            "Pays : " . $this->pays . "<br>" .
            "Vitesse Max : " . $this->vitesseMax . " Km/h<br>" .
            "Capacité : " . $this->capacite . " de places <br><br>";

    }
}
