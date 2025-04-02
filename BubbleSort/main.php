<?php

function bubblesort(array $data): array
{
    for($i = 0; $i < count($data); $i++){
        for($j = $i + 1; $j < count($data); $j++){
            if($data[$i] > $data[$j]){
                swap($data[$i], $data[$j]);
            }
        }
    }
    return $data;
}

function swap(&$a, &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}