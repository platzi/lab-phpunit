<?php

use PHPUnit\Framework\TestCase;
use Italomoralesf\Drill\Data;

class DataTest extends TestCase
{
    public function testGetItemOutOfBounds()
    {
        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage("Index out of bounds");

        $array = ["A", "B", "C"];
        $index = 10;
        
        Data::getItem($array, $index);
    }
}