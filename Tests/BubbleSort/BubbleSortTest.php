<?php

namespace Tests\BubbleSort;

use Algorithms\BubbleSort\BubbleSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class BubbleSortTest extends TestCase
{
    public function test(): void
    {
        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new BubbleSort();
        $input = $algorithm->sort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}
