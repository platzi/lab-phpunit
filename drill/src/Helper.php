<?php

namespace Italomoralesf\Drill;

class Helper
{
    public function sum(array $array): int
    {
        return array_sum($array);
    }

    public function product(array $array): int
    {
        return array_product($array);
    }
}
