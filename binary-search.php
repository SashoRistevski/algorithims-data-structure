<?php


// da receme target e 7

// ako listat e 0 onda vrati false

// ako listata e polna, onda vidi dali midot(oresekot) e isto so target // 5

//ako midot e pomal od targetot onda od krajniot broj na nizata odzemi +1 = 6

// pa onda vrti use ednas u loop i doaga do 7 targetot

// ako midot e pogolem od targetot onda od krajniot broj na nizata odzemi 1

//i se taka vrti dur ne dojde do target
function binarySearch(array $list, $target) : int
{
    $first = 0;
    $last = count($list)-1;

    while ($first <= $last) {
        $mid = ($first + $last) >> 1;

        if ($list[$mid] == $target) { // ideal scenario, target found at first split 50/50
            return $mid;
        } elseif ($list[$mid] > $target) {
            $last = $mid - 1;
        } elseif ($list[$mid] < $target) {
            $first = $mid + 1;
        }
    }

    return -1;
}
function verify($index){
    if ($index != -1 ){
        echo 'Target is found at index'. ':'. $index . PHP_EOL;
    }else{
        echo 'target not found in list';
    }
}
$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = binarySearch($numbers, 1);



