<?php 
	
	if(isset ($_GET['user_name']) && !empty($_GET['user_name'])){
		$user=$_GET['user_name'];
		$user_low=strtolower( $user);
		
		if($user_low=='ali haider'){
			echo "you are the best ".$user ;
		}
	}
?>	
	<form action="index.php" method="GET">
	    Name : <input type ="text" name='user_name'> <br/> <br/>
		<input type="submit" value="Submit">
	
	</form>
