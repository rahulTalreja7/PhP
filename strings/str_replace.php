<?php

	$find= array('fuck','shit','douchebag','ass');
	$replace=array('####','s##t','dou###ag','a#s');
	
	
	$string= 'hey mother fucker no swear words here, you shit ass douchebag';
	$new_string=str_replace($find, $replace, $string);
	echo $new_string;
?>