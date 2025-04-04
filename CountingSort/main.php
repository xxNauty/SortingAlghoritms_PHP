<?php

function countingSort(array $data): ?array
{
    $maxValue = max($data);
    $sizeOfInput = count($data);

    $counts = array_fill(0, $maxValue + 1, 0);
    $output = [];

    for($i = 0; $i < $sizeOfInput; $i++){
        $counts[$data[$i]]++;
    }

    for($i = 0; $i < count($counts); $i++){
        if($counts[$i] > 0){
            for($j = 0; $j < $counts[$i]; $j++){
                $output[] = $i;
            }
        }
    }

    return $output;
}
