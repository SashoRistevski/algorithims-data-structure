<?php

//LINEAR SEARCH
function linearSearch(Array $list, $key){

    // returns the index position of the target if found, else returns None
    for($i=0; $i<count($list); $i++){
        if ($list[$i] === $key){
            return $i;
        }
    }
    return -1;
}
function verify($index){
    if ($index !== -1 ){
        echo 'Target is found at index'. ':'. $index . PHP_EOL;
    }else{
        echo 'target not found in list';
    }
}
$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = linearSearch($numbers, 12);
verify($result);

