<?php

use Common\CommonFunctions;

class BozoSort
{
    public function bozoSort(array $data): array
    {
        while (true) {
            if (!CommonFunctions::isSorted($data)) {
                CommonFunctions::swap(
                    $data[rand(0, count($data))],
                    $data[rand(0, count($data))]
                );
            } else {
                return $data;
            }
        }
    }
}

