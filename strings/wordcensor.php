<?php
$find = array('bitch','fuck' , 'cunt', 'slut' , 'bastard', 'ubit');
$replace= array('b###h','f##k', 'c##t', 's##t', 'ba###d', 'pathetic-shit');

if(isset($_POST['user_input']) && !empty ($_POST ['user_input'])){
	$user_input= $_POST['user_input'];
	$new_user_input=str_replace($find, $replace, $user_input);
	echo $new_user_input;
}


?>

<form action="wordcensor.php" method="POST">
	<textarea name="user_input" rows="7" cols="30"><?php echo $user_input; ?></textarea> <br/> <br/>
	<input type ="submit"  value="Submit">
</form>