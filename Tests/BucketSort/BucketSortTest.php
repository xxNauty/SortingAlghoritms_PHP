<?php

namespace Tests\BucketSort;

use Algorithms\BucketSort\BucketSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class BucketSortTest extends TestCase
{
    public function test(): void
    {
        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new BucketSort();
        $input = $algorithm->sort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}
