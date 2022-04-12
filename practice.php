<?php

  require_once "fruits.php";

  $peach = new Fruit("桃",300,200,15);
  $peach->printStatistics();

  $apple = new Fruit("りんご",400,300,10);
  $apple->printStatistics();


?>