<?php

abstract class Fruit{
    private string $nom;
    private int $poids;
    private float $prix;
    

    public function __construct(string $nom, int $poids, float $prix)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $prix;
    }

    // public function afficherFruit(){
    //     echo "<b>Nom : </b>".$this->nom."<br>";
    //     echo "<b>Poids(en g) : </b>".$this->poids."<br>";
    //     echo "<b>Prix : </b>".$this->prix."<br>";
    // }

    public function __toString(){  //fonction qui permet d'afficher un objet
        $affichage = "Nom : ".$this->nom."<br>";
        $affichage .= "Poids (en g) : ".$this->poids."<br>";
        $affichage .= "Prix (en €): ".$this->prix."<br>";
        return $affichage;
    }

}