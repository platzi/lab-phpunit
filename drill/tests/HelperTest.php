<?php

use PHPUnit\Framework\TestCase;
use Italomoralesf\Drill\Helper;

class HelperTest extends TestCase
{
    public function testSum()
    {
        $helper = new Helper;
        
        $array = [3, 6, 9];

        $this->assertEquals(18, $helper->sum($array));
    }

    public function testProduct()
    {
        $helper = new Helper;
        
        $array = [3, 6, 9];

        $this->assertEquals(162, $helper->product($array));
    }
}
