<?php

class Panier{

    private static $premierIdentifiant = 1;

    private $identifiant;
    private $pomme;
    private $cerise;
    private $poire;

    public function __construct()
    {
        $this->identifiant =self::$premierIdentifiant;
        self::$premierIdentifiant++;
    }

    public function addFruit($fruit){
        
    }
}