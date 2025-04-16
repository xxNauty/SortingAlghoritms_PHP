<?php

namespace Algorithms\BubbleSort;

use Common\AlgorithmInterface;
use Common\CommonFunctions;

class BubbleSort implements AlgorithmInterface
{
    public function sort(array $data): array
    {
        for ($i = 0; $i < count($data); $i++) {
            for ($j = $i + 1; $j < count($data); $j++) {
                if ($data[$i] > $data[$j]) {
                    CommonFunctions::swap($data[$i], $data[$j]);
                }
            }
        }
        return $data;
    }
}
