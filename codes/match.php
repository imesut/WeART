<?php
  $gelen = "Mona Lisa Nisa";
  $gelen = "_" . $gelen;
  $aranan0 = ["mona", "lisa"];
  $aranan1 = ["picasso", "blue", "nude"];
  $aranan2 = ["starry", "night", "van gogh"];
  $aranan3 = ["persistence", "memory"];
  $gelen = strtolower(str_replace(" ", "", $gelen));
  foreach ($aranan0 as $sey) {
    $position = strpos($gelen, $sey);
    echo $position;
    echo "<br>";
    if ($position > 0){
      $id = "1000";
      break;
    };
  };
  foreach ($aranan1 as $sey) {
    $position = strpos($gelen, $sey);
    echo $position;
    echo "<br>";
    if ($position > 0){
      $id = "1001";
      break;
    };
  };
  foreach ($aranan2 as $sey) {
    $position = strpos($gelen, $sey);
    echo $position;
    echo "<br>";
    if ($position > 0){
      $id = "1002";
      break;
    };
  };
  foreach ($aranan3 as $sey) {
    $position = strpos($gelen, $sey);
    echo $position;
    echo "<br>";
    if ($position > 0){
      $id = "1003";
      break;
    };
  };
  if($id <=0){
    $id = "1001";
  }
?>
