<?php

if ( ! function_exists('array_add_elements'))
{
	function array_add_elements($array){
		$sum = 0;
        foreach ($array as $key => $value) {
            $sum+=$value;
        }

        return $sum;
	}
}
