<?php

namespace Tests\CombSort;

use Algorithms\CombSort\CombSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class CombSortTest extends TestCase
{
    public function test(): void
    {
        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new CombSort();
        $input = $algorithm->sort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}