<?php

use PHPUnit\Framework\TestCase;
use Italomoralesf\Drill\Average;

class AverageTest extends TestCase
{
    public function testCalculate()
    {
        $numbers = [3, 9, 8, 9];
        
        $average = new Average($numbers);
        
        $expectedAverage = 7.25;

        $this->assertEquals($expectedAverage, $average->calculate());
    }
}