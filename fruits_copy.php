<?php

    class Fruit{

        public $name = "";
        public $price = "";

        function __construct($name,$minPrice,$maxPrice){
            $this->name = $name;
            $this->price = mt_rand($minPrice,$maxPrice);
        }

        function getMinPrice(){
            return(min($this->price));
        }

    }

?>