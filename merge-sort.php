<?php

function mergeSort(array $list){
    // sort a list in ascending order
    // returns a new sorted list

    // 1. Divide: Find the midpoint and divide the list into sub-lists
    // 2. Conquer : Recursively sort the sub-lists created in previous step
    // 3. Combine: Merge the sorted sub-lists created in previous step

    if (count($list) <= 1){
        // base case for the recursion, stopping condition
        return $list;
    }
    list($half_left, $half_right) = split($list);

    $left = mergeSort($half_left);
    $right = mergeSort($half_right);

    return merge($left,$right);
}
function split($list){
    // divide the list to sub lists and return left and right
    $mid = count($list) >> 1;

    $left = array_slice($list, 0, $mid);
    $right = array_slice($list, $mid);

    return array($left, $right);
}
function merge($left, $right){
    // merges 2 arrays and sorting them and returns new list

    $arr = [];
    $i = 0;
    $j = 0;

    while($i < count($left) && $j < count($right)){
        if ($left[$i] < $right[$j]){
            $arr[] = $left[$i];
            $i += 1;
        }else{
            $arr[] = $right[$j];
            $j += 1;
        }
    }
    while ($i < count($left)){
        $arr[] = $left[$i];
        $i += 1;
    }
    while ($j < count($right)){
        $arr[] = $right[$j];
        $j+= 1;
    }
    return $arr;
}

function verifySorted($list){
    $n = count($list);
    if ($n == 0 || $n == 1){
        return true;
    }
    return $list[0] < $list[1] && verifySorted(array_slice($list, 1));
}

$someList = array(22,17,34,56,90,70,100,46,13,99);
$arr = mergeSort($someList);
var_dump(verifySorted($someList)) . PHP_EOL;
var_dump(verifySorted($arr));