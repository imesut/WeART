<?php
  if(isset($_GET["id"])){
    $id = strval($_GET["id"]);
    $liste = json_decode(file_get_contents("data.json"), true);
    $name = $liste[$id][name];
    $artist = $liste[$id][artist];
    $photo = $liste[$id][photo];
    $similars = $liste[$id][similars];
    $physicalDescription = $liste[$id][name];
    $artfulDescription = $liste[$id][artfulDescription];
    $locationList = $liste[$id][locationList];
    $voice = $liste[$id][voice];

    foreach ($similars as $item){
      $item = (string)$item;
      $name = $liste[$item][name];
      $artist = $liste[$item][artist];
      $photo = $liste[$item][photo];
      echo $name;
      echo "<br>";
      echo $artist;
      echo "<br>";
      echo $photo;
      echo "<br>";
    };
  };
?>
