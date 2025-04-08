<?php

namespace Algorithms;

use Common\CommonFunctions;

class BogoSort
{
    public function bogoSort(array $data): array
    {
        while (true) {
            if (!CommonFunctions::isSorted($data)) {
                CommonFunctions::mix($data);
            } else {
                return $data;
            }
        }
    }
}