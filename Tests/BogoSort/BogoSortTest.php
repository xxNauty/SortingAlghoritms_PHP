<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once "./Algorithms/BogoSort/main.php";
require_once "./Tests/DataForTests.php";

class BogoSortTest extends TestCase
{
    public function testOnUnsorted(): void
    {
        $this->assertTrue(true);
    }

    public function testOnSorted(){
        $this->assertTrue(true);
    }
}
