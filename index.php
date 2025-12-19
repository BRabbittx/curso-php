<?php
$name = "Jeff";
$is_Dev = true;
$age = 5;

define('LOGO_URL','https://img.icons8.com/?size=100&id=53372&format=png&color=000000');

const NOMBRE = 'Manuel';

$output = "Hola " . NOMBRE .", con una edad de $age";

$outputAge = match($age){
  0, 1, 2 => "Eres un bebé, $name",
  3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name",
  11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente, $name",
  19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name",
  default => "Eres un adulto, $name",
};

$heroesDota = ["Zeus","Spectre","Undying","Tuskar"];
$heroesDota[] = "Axe";
$heroesDota[5] = "Mars";

$Axe = [
  "Nombre" => "Axe",
  "Atributo" => "Fuerza",
  "Posición" => "Offlaner",
  "Winrate" => "51.4%",
];

$Antimage = [
  "Nombre" => "Antimage",
  "Atributo" => "Agilidad",
  "Posición" => "Hardcarry",
  "Winrate" => "51.2%",
];

$IO = [
  "Nombre" => "IO",
  "Atributo" => "Fuerza",
  "Posición" => "Suppot",
  "Winrate" => "56.4%",
];

?>

<div>
  <img src="<?= LOGO_URL ?>" alt="Mundo Logo" width="60">
  <h1> <?= $outputAge; ?> </h1>

  <ul>
    <?php foreach ($heroesDota as $heroe) : ?>
      <li><?=$heroe?></li>
    <?php endforeach ?>

    <?php foreach ($Axe as $key => $value) : ?>
      <p><?=$Axe[$key]?></p>
    <?php endforeach ?>

    <?php foreach ($Antimage as $key => $value) : ?>
      <p><?=$Antimage[$key]?></p>
    <?php endforeach ?>

    <?php foreach ($IO as $key => $value) : ?>
      <p><?=$IO[$key]?></p>
    <?php endforeach ?>
  </ul>

</div>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>

