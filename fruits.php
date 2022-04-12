<?php

    class Fruit{

        private $name = "";
        private $prices = [];

        function __construct($name,$maxPrice,$minPrice,$count){

            $this->name = $name;
            $this->maxPrice = $maxPrice;
            $this->minPrice = $minPrice;
            $this->count = $count;
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

?>