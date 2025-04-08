<?php

namespace Algorithms\StalinSort;

class StalinSort
{
    public function stalinSort(array $data): array
    {
        $output = [$data[0]];

        foreach ($data as $value) {
            if ($value >= end($output)) {
                $output[] = $value;
            }
        }

        return $output;
    }
}
