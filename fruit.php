<?php

    class Fruit{

        private $name = "";
        private $maxPrice = "";
        private $minPrice = "";
        private $count = "";
        private $prices = [];

        function __construct($name,$minPrice,$maxPrice,$count){
            
            $this->name = $name;
            $this->maxPrice = $maxPrice;
            $this->minPrice = $minPrice;
            $this->count = $count;
            for ($i = 0; $i < $this->count; $i++){
                $this->prices[] =  mt_rand($this->minPrice,$this->maxPrice);
            }
        }

        function setName($name){
            $this->name = $name;
        }

        function setMaxPrice($maxPrice){
            $this->maxPrice = $maxPrice;
        }

        function setMinPrice($minPrice){
            $this->minPrice = $minPrice;
        }

        function setCount($count){
            $this->count = $count;
        }
        
        function reCreateData(){
            $this->prices = [];
            for ($i = 0; $i < $this->count; $i++){
                $this->prices[] =  mt_rand($this->minPrice,$this->maxPrice);
            }
        }

        function getMinPrice(){    
            return(min($this->prices));
        }
        function getMaxPrice(){
            return(max($this->prices));
        }
        function getAveragePrice(){
            return(round(array_sum($this->prices)/$this->count));
        }
        
        function printStatistics(){

            echo "{$this->name}の最安値:";
            print_r($this->getMinPrice());
            echo "円\n";

            echo "{$this->name}の最高値:";
            print_r($this->getMaxPrice());
            echo "円\n";
        
            echo "{$this->name}の値段の平均値:";
            print_r($this->getAveragePrice());
            echo "円\n";
        }
        
    }

    $peach = new Fruit("桃",200,300,15);
    $peach->printStatistics();

    $apple = new Fruit("りんご",400,500,10);
    $apple->printStatistics();

?>