<?php 

	$offset =0;
	if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
		$text= $_POST['text'];
		$search=$_POST['searchfor'];
		$replace=$_POST['replacewith'];
		$searchLength=strlen($search);
		
		if(!empty($text) && !empty($search) && !empty($replace)){
			while($strpos=strpos($text,$search,$offset)){
				$offset=$strpos + $searchLength;
				echo $text=substr_replace($text,$replace,$strpos,$searchLength);
			}
		}
	}

?>

<form action='index.php' method='POST'>
 a<textarea name='text' rows="11" cols="50" ><?php echo $text ; ?></textarea> <br/> <br/>
 Search for: <br/>
 <input type='text' name='searchfor'> <br/> <br/>
 Replace with: <br/>
 <input type='text' name='replacewith'> <br/> <br/>
 <input type='submit' value='Find and Replace'>

</form>