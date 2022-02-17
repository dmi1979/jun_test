<?php
require "createPairIndexes.php";
for ($players=1;$players<=99;$players++){



// $players=readline('how much players???');

$pairsByDay=createPairIndexes($players);
$players=$players*1;
if($players%2!==0) {$players++;}
$table = array_fill(1,$players,(array_fill(1,$players,null)));//массив массивов , реализующий  квадратную турнирную таблицу,хранит информацию в индексах, значение null ненужны в коде TODO  можно ли обойтись без них?
print_r($table);

for($i=1;$i<=$players;$i++) unset ($table[$i][$i]);// удалим заведомо ненужные пары

//теперь пройдемся по массиву пар $pairsByDay   и  вычеркнем все пары из проверочной таблицы $table
// не должно остаться свободных элементов в таблице. не должно быть более чем одного обращения к ячейке( это значить возникла одинаковая пара) . если оба условия соблюдены то проверка пройдена

// array_walk_recursive
foreach($pairsByDay as $pairsOfDay){
    while($playerA=array_shift($pairsOfDay) and $playerB=array_shift($pairsOfDay)){
    
        if ( array_key_exists($playerB,$table[$playerA]) and array_key_exists($playerA,$table[$playerB])){
        echo "\n$playerA - $playerB";
        unset ($table[$playerA][$playerB]);
        unset ($table[$playerB][$playerA]);
        } else  {
        echo "\nERROR/второе обращение , дублирующая пара  $playerA - $playerB\n";
        exit;
    }
}
print_r($table);
// print_r (array_merge(...$pairsByDay));
// echo count(array_merge(...$pairsByDay))/2;



}
}