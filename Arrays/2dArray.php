<?php
	$food= array('healthy'=>array('spinach', 'salad', 'chicken'),'unhealthy'=>array('pizza', 'pasta', 'ice-cream'));
	
	//echo $food['healthy'][0];
	foreach($food as $el=>$inner_el){
		echo '<strong>'.$el.'</strong><br/>' ;
		foreach($inner_el as $item){
			echo $item .'<br/>';
		}
	}
?>