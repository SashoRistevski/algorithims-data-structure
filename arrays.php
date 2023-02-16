<?php

$newList = array(1,2,3);

$result = $newList[0];
echo $result .  "\n";

if (in_array(1, $newList)) echo 'i found the element';

for ($i = 0; $i < count($newList); $i++){
    if($newList[$i] == 1) echo 'True' . PHP_EOL;
}

$numbers = array();
$result1  = array_push($numbers,2,3, 4,5,6) . PHP_EOL;

