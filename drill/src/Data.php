<?php

namespace Italomoralesf\Drill;

class Data
{
    public static function getItem($array, $index)
    {
        if ( ! array_key_exists($index, $array)) {
            throw new \OutOfBoundsException("Index out of bounds");
        }
        
        return $array[$index];
    }
}