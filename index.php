<?php
function countPairs($array) {
    $pairs = 0;
    $n = count($array);
    
    for ($i = 0; $i < $n - 1; $i++) {
        if ($array[$i] == $array[$i + 1]) {
            $pairs++;
        }
    }
    
    return $pairs;
}

$arr = [1, 1, 2, 3, 4, 51, 12, 12, 12, -51];
$result = countPairs($arr);
echo $result;
