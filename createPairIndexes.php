
<?php
//test-checkpairs
function createPairIndexes($players){
$players=$players*1;//TODO привести к int через встроенную ф-ию PHP

if ($players%2!==0){
    $players++;
    $zaglushka=true;    //добавим игрока заглушку
    }
$a=$wheel=range(1,$players);
unset($wheel[0]);

$days=$players-1;
for ($day=1;$day<=$days;$day++){
    
    $wheel[]=array_shift($wheel);//перемещаем первый элемент массива в конец его
        //теперь разберем массив на пары
        $copy=$wheel;
        $copy[]=1;//добавим в конец его единицу
//     print_r($copy);
//         echo "\nDAY $day";
        while ($playerA=array_shift($copy) and  $playerB=array_pop($copy)){//берем пару из первого и последнего элемента, постепенно сокращая массив
//             echo "\n $playerA - $playerB";
            $result[$day][]=$playerA;
            $result[$day][]=$playerB;
            
            }
            
}
return $result;
}

