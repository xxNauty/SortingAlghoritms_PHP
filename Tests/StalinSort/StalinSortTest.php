<?php

namespace Tests\StalinSort;

use Algorithms\StalinSort\StalinSort;
use PHPUnit\Framework\TestCase;
use Tests\DataForTests;

class StalinSortTest extends TestCase
{
    public function test(): void
    {
        $input = DataForTests::UNSORTED_DATA;

        $algorithm = new StalinSort();
        $input = $algorithm->stalinSort($input);

        $this->assertLessThan(count(DataForTests::UNSORTED_DATA), count($input));

        for($i = 0; $i < count($input) - 1; $i++){
            $this->assertLessThanOrEqual($input[$i + 1], $input[$i]);
        }
    }
}
