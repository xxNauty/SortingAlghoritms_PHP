<?php

require_once "../Common/is_sorted.php";
require_once "../Common/swap.php";

function bozoSort(array $data): array
{
    while (true) {
        if (!isSorted($data)) {
            swap(
                $data[rand(0, count($data))],
                $data[rand(0, count($data))]
            );
        }
        else {
            return $data;
        }
    }
}
