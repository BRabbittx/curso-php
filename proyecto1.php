<?php 
  const API_URL = "https://whenisthenextmcufilm.com/api";
  # Inicializar una nueva sesión de cURL; ch = cURL handle
  $ch = curl_init(API_URL);
  # Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64)");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  # Ejecutar la petición
  # y guardamos el resultado

  $result = curl_exec($ch);
  $data = json_decode($result, true);
?>

<head>
  <title>La próxima película de Marvel</title>
  <meta name="description" content="La próxima película de Marvel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link 
    rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main class="main1">
  <section>
    <img src="<?=$data["poster_url"];?>" width="300" alt="Poster de <?= $data["title"];?>" style="border-radius: 16px">
  </section>

  <hgroup>
    <h3> La siguiente película es: <?= $data["title"];?> que se estrena en: <?=$data["days_until"]?> días</h3>
    <h3> Fecha de estreno: <?= $data["release_date"];?> </h3>
    <h3> Descripción: <?= $data["overview"];?></h3>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  .body {
    display: grid;
    place-content: center;
  }

  section{
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }

  .main1{
    margin-top: 15px;
  }
</style>