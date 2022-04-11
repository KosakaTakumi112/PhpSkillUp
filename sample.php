<?php

    class Sample{

        private $name = "";
        private $maxPrice = "";
        private $minPrice = "";
        private $count = "";
        private $data = [];

        function __construct($name,$maxPrice,$minPrice,$count){
            
            $this->name = $name;
            $this->maxPrice = $maxPrice;
            $this->minPrice = $minPrice;
            $this->count = $count;
            for ($i = 0; $i < $this->count; $i++){
                $this->data[] =  mt_rand($this->minPrice,$this->maxPrice);
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
            $this->data = [];
            for ($i = 0; $i < $this->count; $i++){
                $this->data[] =  mt_rand($this->minPrice,$this->maxPrice);
            }
        }

        function getMinPrice(){    
            return(min($this->data));
        }
        function getMaxPrice(){
            return(max($this->data));
        }
        function getAveragePrice(){
            return(round(array_sum($this->data)/$this->count));
        }
        
        function getStatistics(){

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

    $apple = new Sample("桃",300,200,15);
    $apple->getStatistics();

?>