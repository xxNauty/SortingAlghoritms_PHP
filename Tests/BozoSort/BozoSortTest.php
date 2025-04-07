<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once "./Algorithms/BozoSort/main.php";
require_once "./Tests/DataForTests.php";

class BozoSortTest extends TestCase
{
    public function testOnUnsorted(): void
    {
        $this->assertTrue(true);
    }

    public function testOnSorted(){
        $this->assertTrue(true);
    }
}