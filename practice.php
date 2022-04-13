<?php

  require_once "fruits_copy.php";
  require_once "market.php";

  function getFruitMarket($name,$minPrice,$maxPrice,$count){

    $market = new Market;
    $prices = [];

    for ($i = 0; $i < $count; $i++){
      $prices[] =  new Fruit($name,$minPrice,$maxPrice);
    };

    $market->addProductList($prices);

    return $market;
  }

  $peach_market = getFruitMarket("桃",200,300,15);
  $peach_market->printStatistics();

  $strawberry_market = getFruitMarket("いちご",400,500,15);
  $strawberry_market->printStatistics();

?>