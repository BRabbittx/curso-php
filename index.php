<?php 

  require 'consts.php';
  require 'functions.php';

  $data = get_data(API_URL);
  $until_message = get_until_message($data["days_until"]);

  render_template('head',$data);
  render_template('main',array_merge(
    $data, 
    ["until_message" => $until_message]
  ));

  render_template('styles');
  
?>





