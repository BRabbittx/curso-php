<?php 

  require_once 'functions.php';

  $data = get_data(API_URL);
  $untilMessage = get_until_message($data["days_until"]);
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
    <h3> La siguiente película es: <?= $data["title"];?> que se estrena en: <?= $untilMessage?> </h3>
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