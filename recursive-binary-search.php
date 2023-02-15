<?php




// 1.The function takes four arguments: an array $list to search through, the starting index $start of the subarray being searched,
// the ending index $end of the subarray being searched, and the target value $target to find.
//
// 2.The first thing the function does is check if the starting index $start is greater than the ending index $end.
// If this is the case, it means that the target value was not found in the subarray,
// so the function returns -1 to indicate that.
//
// 3.If the starting index $start is less than or equal to the ending index $end,
// the function calculates the middle index of the subarray as $mid = ($start + $end) >> 1,
// using the bitwise shift right operator to divide the sum by 2.
//
//4.The function then checks if the value at the middle index $list[$mid] is equal to the target value $target.
// If it is, the function returns the index $mid at which the target value was found.
//
// 5.If the value at the middle index $list[$mid] is greater > than the target value $target,
// the function makes a recursive call to itself with the same array $list,
// the same starting index $start, and the new ending index $mid-1.
// This is because if the middle value is greater than the target value,
// the target value can only be found in the left half of the subarray.
// The function returns the result of the recursive call.
//
// 6.If the value at the middle index $list[$mid] is less than the target value $target,
// the function makes a recursive call to itself with the same array $list,
// the new starting index $mid+1, and the same ending index $end.
// This is because if the middle value is less than the target value,
// the target value can only be found in the right half of the subarray.
// The function returns the result of the recursive call.
//
// 7. The function continues to make recursive calls until the target value is found in the array,
// or until it determines that the target value is not present in the subarray.

function recursiveBinarySearch($list, $start, $end, $target)
{
    if ($start > $end)
        return -1;
    $mid = ($start + $end) >> 1;

    if ($list[$mid] == $target) {
        return $mid;
    } elseif ($list[$mid] > $target) {
        return recursiveBinarySearch($list, $start, $mid-1, $target);
    } elseif ($list[$mid] < $target) {
        return recursiveBinarySearch($list, $mid+1, $end, $target);
    }
}

$numbers = [1, 3, 5, 7, 9, 11, 13];
$target = 7;

// Perform recursive binary search on $numbers to find $target
$result = recursiveBinarySearch($numbers, 0, count($numbers) - 1, $target);

// Check if target was found and output result
if ($result === -1) {
    echo "Target value was not found in the array.";
} else {
    echo "Target value was found at index: " . $result;
}
