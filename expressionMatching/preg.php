<?php 

	function has_space($string){
		if(preg_match('/ /',$string))
			return true;
		else 
			return false;
	}
	
	$s="has oneSpace";
	$s2='hasNoSpaces';
	if(has_space($s2)){
		echo 'has atleast one space';
	}
	else 
		echo 'has no space';
?>