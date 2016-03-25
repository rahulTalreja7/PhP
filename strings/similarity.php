<?php 
		//this program calculates the similarity between texts in percentage
	$s1="this is my first string and this is going to be fun ";
	$s2="this is my second string and this turns into a boring shit";
	
	similar_text($s1,$s2,$result);
	
	echo "similarity ".$result."%";
?>