<?php

namespace Algorithms\BucketSort;

use Common\AlgorithmInterface;

class BucketSort implements AlgorithmInterface
{
    public function sort(array $data): array
    {
        if (empty($data)) {
            return [];
        }

        $min = min($data);
        $max = max($data);

        $bucketCount = 10;
        $buckets = array_fill(0, $bucketCount, []);

        foreach ($data as $num) {
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
