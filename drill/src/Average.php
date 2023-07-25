<?php

namespace Italomoralesf\Drill;

class Average
{
	public function __construct(protected $array = []) { }

	public function calculate()
	{
		$array = $this->array;

		$sum = array_sum($array);
	    $count = count($array);
	    
	    if ($count === 0) {
	        return 0;
	    }
	    
	    return $sum / $count;
	}
}
