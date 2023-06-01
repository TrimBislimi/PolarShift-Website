<?php 
if(isset($_POST['usernameR'])){
	$string = "user admin dbuser";
	$un = htmlspecialchars($_POST['usernameR']);
	if(stripos($string,$un)==true) echo trim("false");
		else echo trim("true");
}
else die
?>
