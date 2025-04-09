<?php

namespace Algorithms\BucketSort;

use Common\CommonFunctions;

class BucketSort
{
    public function bucketSort(array $data): array
    {
        if (empty($data)) {
            return [];
        }

        $min = min($data);
        $max = max($data);

        $bucketCount = 10;
        $buckets = array_fill(0, $bucketCount, []);

        // Distribute numbers into buckets
        foreach ($data as $num) {
            // Calculate the appropriate bucket index
            $bucketIndex = (int)(($num - $min) / ($max - $min + 1) * $bucketCount);
            $buckets[$bucketIndex][] = $num;
        }

        $output = [];
        foreach ($buckets as $bucket) {
            sort($bucket);
            $output = array_merge($output, $bucket);
        }

        return $output;
    }
}
