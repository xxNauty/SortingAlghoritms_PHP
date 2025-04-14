<?php

namespace Tests\BogoSort;

use Algorithms\BogoSort\BogoSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class BogoSortTest extends TestCase
{
    public function test(): void
    {
        $this->markTestSkipped("Zbyt wolny by zostawić");

        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new BogoSort();
        $input = $algorithm->bogoSort($input);

        $this->assertEquals(DataForTests::SORTED_DATA, $input);
    }
}
