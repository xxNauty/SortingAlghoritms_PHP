<?php

namespace Tests\BozoSort;

use Algorithms\BozoSort\BozoSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class BozoSortTest extends TestCase
{
    public function test(): void
    {
        $this->markTestSkipped("Zbyt wolny by zostawić");

        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new BozoSort();
        $input = $algorithm->bozoSort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}
