<?php
//learningClassConcept

class My {
    function __construct ($name){
    $this->na=$name;
    echo $this->na;
    }
public function pubFunction($input){
    echo $this -> someFunction($input);
    
}
private function someFunction($input){
    return $input/2;
}
}
$a=new My ('dmi');
// print_r($a);
echo $a->pubFunction(10);
echo $a->someFunction(10);