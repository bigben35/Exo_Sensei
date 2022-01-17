<?php

require_once "Class/Fruit.php";

class Pomme extends Fruit{

    public function __construct()
    {
        parent::__construct("Pomme",200, 1.5);
    }

    public function sePresenter(){
         echo "Je suis une belle Pomme !".PHP_EOL;
    }
}