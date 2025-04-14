<?php

namespace Algorithms\CombSort;

require '../../vendor/autoload.php'; //wymagane by działały namespace i importowanie z użyciem use

use Common\CommonFunctions;

class CombSort
{
    public function combSort(array $data): array
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

$alg = new CombSort();

var_dump($alg->combSort([5, 3, 8, 12, 76, 32, 99, 11, 12, 32]));