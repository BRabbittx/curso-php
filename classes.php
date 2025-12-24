<?php
  class SuperHero 
  {
    //propiedades y métodos
    public $name;
    public $powers;
    public $planet;

    public function attack(){
      return "$this -> name ataca con sus poderes!";
    }

    public function description(){
      return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $this->powers";
    }
  }

  $hero = new SuperHero();
  $hero->name = "Batman";
  $hero->powers = "Inteligencia y tecnología";
  $hero->planet = "Gotham";

  echo $hero -> description();


?>

