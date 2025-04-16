<?php

namespace Algorithms\CombSort;

use Common\AlgorithmInterface;
use Common\CommonFunctions;

class CombSort implements AlgorithmInterface
{
    public function sort(array $data): array
    {
        $gap = count($data);
        $swapped = true;

        while($gap > 1 || $swapped){
            $gap = (int) $gap * 10 / 13;
            if($gap == 0){
                $gap = 1;
            }
            $swapped = false;

            for($i = 0; $i < count($data) - 1; $i += $gap){
                if($data[$i] > $data[$i + 1]){
                    CommonFunctions::swap($data[$i], $data[$i + 1]);
                    $swapped = true;
                }
            }
        }

        return $data;
    }
}