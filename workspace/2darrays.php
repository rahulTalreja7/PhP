<?php
 // multidimensional arrays
 
 /*
 HEALTHY
pasta 
spinach 
roasted chicken 
UNHEALTHY
pizza 
burger 
mayo roll
*/
 
 
 
 $food = array('healthy'=> 
							array('pasta','spinach','roasted chicken'),
				'unhealthy'=> 
							array('pizza','burger','mayoroll'));
 foreach ($food as $category=>$inner_chooice)
 {
	 echo '<strong>'.$category.'</strong>'.'<br>';
	 foreach($inner_chooice as $item)
	 {
		 echo $item.'<br>';
	 }
 }
 ?>