<?php
 //include 'main.php';
 //require 'notexist.php';        //will not execute any further becuase the require file doesn't exist
 require 'main.php';
 require_once 'main.php';         //it will check if main.php is previously been required or not, if 
								  //not required then it will use require otherwise do nothing at all
 echo $var2;
?>