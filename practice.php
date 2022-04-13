<?php

  require_once "market.php";

  $peach_market = new Market("桃",200,300,15);
  $peach_market->printStatistics();

  $strawberry_market = new Market("いちご",400,500,15);
  $strawberry_market->printStatistics();

?>