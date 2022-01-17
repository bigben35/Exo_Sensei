<?php

require_once "Class/Fruit.php";

class Poire extends Fruit{

    public function __construct()
    {
        parent::__construct("Poire",150, 1);
    }

    public function sePresenter(){
         echo "Je suis une belle Poire !".PHP_EOL;
    }
}