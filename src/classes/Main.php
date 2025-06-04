<?php

namespace mahjong\classes;

class Main
{
    protected $tuiles;

    public function __construct(){
        $tuiles = [];
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    public function __set($property,$value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }

    public function toString(){
        $str = "";
        foreach($this->tuiles as $tuile){
            $str+=$tuile;
        }
        return $str;
    }

}