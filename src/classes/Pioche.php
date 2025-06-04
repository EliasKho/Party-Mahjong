<?php

namespace mahjong\classes;

class Pioche
{

    protected $tileList;

    public function __construct(){
        $this->tileList = [
            // Manzu (caractères)
            '1m','1m','1m','1m',
            '2m','2m','2m','2m',
            '3m','3m','3m','3m',
            '4m','4m','4m','4m',
            '5m','5m','5m','0m',
            '6m','6m','6m','6m',
            '7m','7m','7m','7m',
            '8m','8m','8m','8m',
            '9m','9m','9m','9m',

            // Pinzu (cercles)
            '1p','1p','1p','1p',
            '2p','2p','2p','2p',
            '3p','3p','3p','3p',
            '4p','4p','4p','4p',
            '5p','5p','5p','0p',
            '6p','6p','6p','6p',
            '7p','7p','7p','7p',
            '8p','8p','8p','8p',
            '9p','9p','9p','9p',

            // Souzu (bambous)
            '1s','1s','1s','1s',
            '2s','2s','2s','2s',
            '3s','3s','3s','3s',
            '4s','4s','4s','4s',
            '5s','5s','5s','0s',
            '6s','6s','6s','6s',
            '7s','7s','7s','7s',
            '8s','8s','8s','8s',
            '9s','9s','9s','9s',

            // Honneurs (vents et dragons)
            '1z','1z','1z','1z', // Est
            '2z','2z','2z','2z', // Sud
            '3z','3z','3z','3z', // Ouest
            '4z','4z','4z','4z', // Nord
            '5z','5z','5z','5z', // Haku
            '6z','6z','6z','6z', // Hatsu
            '7z','7z','7z','7z', // Chun
        ];
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

    public function melanger(){
        echo $this->tileList->get(1);
        shuffle($this->tileList);
    }

    public function toString(){
        $str = "";
        $i = 0;
        foreach($this->tileList as $tile){
            if($i>=10){
                $str.='<br>';
                $i=0;
            }
            $str .= $tile.'-';
            $i++;
        }
        return $str;
    }

    public function donnerTuile(){
        //$this->tileList->
    }

}