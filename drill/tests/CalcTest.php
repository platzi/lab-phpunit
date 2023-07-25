<?php

use PHPUnit\Framework\TestCase;
use Italomoralesf\Drill\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calc;

        $result = $calculator->add(3, 6);

        $this->assertEquals(9, $result);
    }
}
