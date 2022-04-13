<?php

    require_once "fruits.php";

    class Market{

      public $products = [];

      function __construct($name,$minPrice,$maxPrice,$count){
        for ($i = 0; $i < $count; $i++){
          $this->products[] =  new Fruit($name,$minPrice,$maxPrice);
        };

    }

      function addProduct($product){
        $this->products[] = $product;
      }

      function addProductList($product_list){
        $this->products = array_merge($product_list);
      }

      function getMinPrice(){
          return(min(array_column($this->products, "price")));
      }

      function getMaxPrice(){
          return(max(array_column($this->products, "price")));
      }

      function getAveragePrice(){
          return(round(array_sum(array_column($this->products, "price"))/count($this->products)));
      }

      function printStatistics(){

        if(count($this->products) != 0){

          $name = $this->products[0]->name;

          echo "{$name}の最安値:";
          print_r($this->getMinPrice());
          echo "円\n";

          echo "{$name}の最高値:";
          print_r($this->getMaxPrice());
          echo "円\n";

          echo "{$name}の値段の平均値:";
          print_r($this->getAveragePrice());
          echo "円\n";

        }

      }

  }


?>