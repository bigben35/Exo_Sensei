<?php

require_once "Class/Fruit.php";

class Cerise extends Fruit{

    public function __construct()
    {
        parent::__construct("Cerise",10, 0.4);
    }

    public function sePresenter(){
         echo "Je suis une belle Cerise !".PHP_EOL;
    }
}