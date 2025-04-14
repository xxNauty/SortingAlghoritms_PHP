<?php

namespace Tests\CountingSort;

use Algorithms\CountingSort\CountingSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class CountingSortTest extends TestCase
{
    public function test(): void
    {
        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new CountingSort();
        $input = $algorithm->countingSort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}
