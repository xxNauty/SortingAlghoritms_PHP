<?php

function bogosort(array $data): array
{
    while(true){
        if(!isSorted($data)){
            shuffle($data);
        }
        else{
            return $data;
        }
    }
}

function isSorted(array $data): bool
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        if($data[$i] > $data[$i+1]) {
            return false;
        }
    }

    return true;
}

function mix(array &$data): void
{
    for($i = 0; $i < count($data); $i++ ){
        swap(
            $data[rand(0, count($data))],
            $data[rand(0, count($data))]
        );
    }
}

function swap(&$a, &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}