<?php
	
	// functions and return values
	
	function add($num1, $num2){
		return $num1 + $num2;
	}
	
	function div($num1, $num2){
		return $num1/$num2;
	}
	
	$sum= div(add(9,3),add(3,1));
	echo $sum;

?>