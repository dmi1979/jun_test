<?php

class Tournament{
private $name;
private $players;
private $date;
function __construct(... $array){

    $this->name=$array[0];
    echo "\nВ конструктор передано:\n";
    print_r($array);
  if (isset($array[1])) { 
    echo "\ndate is seted";$this->date=$array[1];
  } else {
  $this->date= date('d.m.Y.',strtotime("+1 day"));
    echo "date for beginning - tomorrow!";
    echo $this->date;
  }
}


function addPlayer($player){
$this->players[]=$player;
}

function createPairs(){}

}
