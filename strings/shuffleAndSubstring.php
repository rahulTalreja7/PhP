<?php
	$s="this is my string";
	$shuffledString= str_shuffle($s);
	//echo $shuffledString;
	
	$half= substr($shuffledString,0,strlen($s)/2);
	echo $half;
?>