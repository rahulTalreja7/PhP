<?php
    $offset=0;
	$tofind='is';
	$tofindlen= strlen($tofind);
	
	$string='this is fucking boring ';
	
	
	while($str_pos= strpos($string, $tofind ,$offset)){
		echo '<strong>'.$tofind.'</strong> found at '.$str_pos .'<br/>';
		$offset=$str_pos + $tofindlen;
	}
?>