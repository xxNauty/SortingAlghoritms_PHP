<?php

require_once "./Common/is_sorted.php";
require_once "./Common/swap.php";

function bogoSort(array $data): array
{
    while (true) {
        if (!isSorted($data)) {
            mix($data);
        } else {
            return $data;
        }
    }
}

function mix(array &$data): void
{
    for ($i = 0; $i < count($data); $i++) {
        swap(
            $data[rand(0, count($data))],
            $data[rand(0, count($data))]
        );
    }
}
